<?php

/**
 *
 * ReachshipAPIClient File.
 *
 * @package ReachShip Library
 */

/**
 * ReachshipAPIClient Class.
 */

/**
 * ReachshipAPIClient
 */
class ReachshipAPIClient
{
    /**
     * App URL.
     *
     * @var string
     */
    private static $appUrl = 'https://api.reachship.com/';

    /**
     * Function httpPostRequest
     *
     * @param  string $url URL.
     * @param  array  $headers Headers.
     * @param  array  $body Body.
     * @return array
     */
    public static function httpPostRequest($url, $headers = array(), $body = array())
    {
        try {
            $response = Requests::post($url, $headers, $body);

            return array(
                'status_code' => $response->status_code,
                'body'        => $response->body,
            );
        } catch (Exception $e) {
            return array(
                'status_code' => 500,
                'body'        => 'Server Error!',
            );
        }
    }

    /**
     * Function httpGetRequest
     *
     * @param  string $url URL.
     * @param  array  $headers Headers.
     * @return array
     */
    public static function httpGetRequest($url, $headers = array(), $query_parameters = array())
    {
        try {
            $response = Requests::get($url, $headers, $query_parameters);

            return array(
                'status_code' => $response->status_code,
                'body'        => $response->body,
            );
        } catch (Exception $e) {
            return array(
                'status_code' => 500,
                'body'        => 'Server Error!',
            );
        }
    }

    /**
     * Function JSONEncode
     *
     * @param  mixed $data Data.
     * @return mixed
     */
    public static function JSONEncode($data)
    {
        return json_encode($data);
    }

    /**
     * Function getAPIMode
     *
     * @param  string $apiMode Mode.
     * @return string
     */
    public static function getAPIMode($apiMode)
    {
        return ! empty($apiMode) && in_array($apiMode, array( 'sandbox', 'production' ), true) ? $apiMode : 'sandbox';
    }

    /**
     * Function getApiHeaders
     *
     * @param  string $token Token.
     * @return array
     */
    public static function getApiHeaders($token)
    {
        return array(
            'Authorization' => 'Bearer ' . $token,
            'Content-Type'  => 'application/json',
            'User-Agent'    => 'WordPress/ReachShip',
        );
    }

    /**
     * Function getToken
     *
     * @param  string $clientId Client ID.
     * @param  string $clientSecret Client Secret.
     * @param  string $apiMode API Mode.
     * @return array
     */
    public static function getToken($clientId, $clientSecret, $apiMode = 'sandbox')
    {
        try {
            $baseURL = self::$appUrl . self::getAPIMode($apiMode);
            $requestURL = sprintf(
                "%s/v1/oauth/token?grant_type=client_credentials&client_id=%s&client_secret=%s",
                $baseURL,
                $clientId,
                $clientSecret
            );
            $response = self::httpGetRequest($requestURL);
            if (200 === $response['status_code']) {
                $decodedResponse = json_decode($response['body']);
                return array(
                    'status'         => 'success',
                    'client_id'      => $clientId,
                    'client_secret'  => $clientSecret,
                    'token'          => $decodedResponse->access_token,
                    'token_validity' => strtotime('+ 30 days'),
                    'mode'           => self::getAPIMode($apiMode),
                );
            }

            return array(
                'status'  => 'error',
                'message' => 'Invalid Credentials!',
            );
        } catch (Exception $e) {
            return array(
                'status'  => 'error',
                'message' => 'Server Error!',
            );
        }
    }

    /**
     * Function getCarrierCredentialsSummary
     *
     * @param  string $token Token.
     * @param  string $apiMode API Mode.
     * @return array
     */
    public static function getCarrierCredentialsSummary($token, $apiMode = 'sandbox')
    {
        try {
            $response = self::httpGetRequest(
                self::$appUrl . self::getAPIMode($apiMode) . '/v1/get-carrier-credentials-summary',
                self::getApiHeaders($token)
            );

            if (200 === $response['status_code']) {
                $decodedResponse = json_decode($response['body']);
                return array(
                    'status' => 'success',
                    'data'   => $decodedResponse,
                    'mode'   => $apiMode,
                );
            }

            return array(
                'status'  => 'error',
                'message' => 'Error fetching the details',
            );
        } catch (Exception $e) {
            return array(
                'status'  => 'error',
                'message' => 'Server Error!',
            );
        }
    }

    /**
     * Function saveCredentials
     *
     * @param  string $token Token.
     * @param  string $carrier Carrier.
     * @param  string $accountName Account Name.
     * @param  array  $credentialsObject Credentials Object.
     * @param  string $apiMode Mode.
     * @return array
     */
    public static function saveCredentials($token, $carrier, $accountName, $credentialsObject, $apiMode = 'sandbox')
    {
        try {
            $data = array();

            switch ($carrier) {
                case 'DHL':
                    $data = array(
                        'carrier'         => $carrier,
                        'account_name'    => $accountName,
                        'dhl_credentials' => json_decode($credentialsObject),
                    );
                    break;
                case 'FEDEX':
                    $data = array(
                        'carrier'           => $carrier,
                        'account_name'      => $accountName,
                        'fedex_credentials' => json_decode($credentialsObject),
                    );
                    break;
                case 'UPS':
                    $data = array(
                        'carrier'         => $carrier,
                        'account_name'    => $accountName,
                        'ups_credentials' => json_decode($credentialsObject),
                    );
                    break;
                case 'STAMPS_USPS':
                    $data = array(
                        'carrier'                 => $carrier,
                        'account_name'            => $accountName,
                        'usps_stamps_credentials' => json_decode($credentialsObject),
                    );
                    break;
                case 'AUSPOST_MYPOST':
                    $data = array(
                        'carrier'                    => $carrier,
                        'account_name'               => $accountName,
                        'auspost_mypost_credentials' => json_decode($credentialsObject),
                    );
                    break;
                default:
                    return array(
                        'status'  => 'error',
                        'message' => 'Invalid Data!',
                    );
            }

            $response = self::httpPostRequest(
                self::$appUrl . self::getAPIMode($apiMode) . '/v1/save-carrier-credentials',
                self::getApiHeaders($token),
                self::JSONEncode($data)
            );

            $decodedResponse = json_decode($response['body']);

            if (200 === $response['status_code']) {
                return array(
                    'status'  => 'success',
                    'message' => $decodedResponse->message,
                );
            }

            return array(
                'status'  => 'error',
                'message' => $decodedResponse->message,
            );
        } catch (Exception $e) {
            return array(
                'status'  => 'error',
                'message' => 'Server Error!',
            );
        }
    }

    /**
     * Function updateCredentials
     *
     * @param  string $token Token.
     * @param  string $carrier Carrier.
     * @param  string $accountName Account Name.
     * @param  array  $credentialsObject Credentials Object.
     * @param  string $apiMode Mode.
     * @return array
     */
    public static function updateCredentials($token, $carrier, $accountName, $credentialsObject, $apiMode = 'sandbox')
    {
        try {
            $data = array();

            switch ($carrier) {
                case 'DHL':
                    $data = array(
                        'carrier'         => $carrier,
                        'account_name'    => $accountName,
                        'dhl_credentials' => json_decode($credentialsObject),
                    );
                    break;
                case 'FEDEX':
                    $data = array(
                        'carrier'           => $carrier,
                        'account_name'      => $accountName,
                        'fedex_credentials' => json_decode($credentialsObject),
                    );
                    break;
                case 'UPS':
                    $data = array(
                        'carrier'         => $carrier,
                        'account_name'    => $accountName,
                        'ups_credentials' => json_decode($credentialsObject),
                    );
                    break;
                case 'STAMPS_USPS':
                    $data = array(
                        'carrier'                 => $carrier,
                        'account_name'            => $accountName,
                        'usps_stamps_credentials' => json_decode($credentialsObject),
                    );
                    break;
                case 'AUSPOST_MYPOST':
                    $data = array(
                        'carrier'                    => $carrier,
                        'account_name'               => $accountName,
                        'auspost_mypost_credentials' => json_decode($credentialsObject),
                    );
                    break;
                default:
                    return array(
                        'status'  => 'error',
                        'message' => 'Invalid Data!',
                    );
            }

            $response = self::httpPostRequest(
                self::$appUrl . self::getAPIMode($apiMode) . '/v1/update-carrier-credentials',
                self::getApiHeaders($token),
                self::JSONEncode($data)
            );

            $decodedResponse = json_decode($response['body']);

            if (200 === $response['status_code']) {
                return array(
                    'status'  => 'success',
                    'message' => $decodedResponse->message,
                );
            }

            return array(
                'status'  => 'error',
                'message' => isset($decodedResponse->message) ? $decodedResponse->message : 'Error!',
            );
        } catch (Exception $e) {
            return array(
                'status'  => 'error',
                'message' => 'Server Error!',
            );
        }
    }

    /**
     * Function deleteCarrierCredentials
     *
     * @param  string $token Token.
     * @param  string $body Request Body.
     * @param  string $apiMode Mode.
     * @return array
     */
    public static function deleteCarrierCredentials($token, $body, $apiMode = 'sandbox')
    {
        try {
            $response = self::httpPostRequest(
                self::$appUrl . self::getAPIMode($apiMode) . '/v1/delete-carrier-credentials',
                self::getApiHeaders($token),
                $body
            );

            $decodedResponse = json_decode($response['body']);

            if (200 === $response['status_code']) {
                return array(
                    'status'  => 'success',
                    'message' => $decodedResponse->message,
                );
            }

            return array(
                'status'  => 'error',
                'message' => $decodedResponse->message,
            );
        } catch (Exception $e) {
            return array(
                'status'  => 'error',
                'message' => 'Server Error!',
            );
        }
    }

    /**
     * Function getRates
     *
     * @param  string $token Token.
     * @param  string $body Body.
     * @param  string $apiMode Mode.
     * @return array
     */
    public static function getRates($token, $body, $apiMode = 'sandbox')
    {
        try {
            $response = self::httpPostRequest(
                self::$appUrl . self::getAPIMode($apiMode) . '/v1/rates',
                self::getApiHeaders($token),
                $body
            );

            $decodedResponse = json_decode($response['body']);

            if (200 === $response['status_code']) {
                return array(
                    'status'  => 'success',
                    'message' => $decodedResponse,
                );
            }

            return array(
                'status'  => 'error',
                'message' => $decodedResponse->message,
            );
        } catch (Exception $e) {
            return array(
                'status'  => 'error',
                'message' => 'Server Error!',
            );
        }
    }

    /**
     * Function generateShipment
     *
     * @param string $token Token.
     * @param array  $body Body.
     * @param string $apiMode Mode.
     * @return array
     */
    public static function generateShipment($token, $body, $apiMode = 'sandbox')
    {
        try {
            $response = self::httpPostRequest(
                self::$appUrl . self::getAPIMode($apiMode) . '/v1/print-label',
                self::getApiHeaders($token),
                $body
            );

            $decodedResponse = json_decode($response['body']);

            if (200 === $response['status_code']) {
                return array(
                    'status'  => 'success',
                    'message' => $decodedResponse,
                );
            }

            if (403 === $response['status_code']) {
                return array(
                    'status'  => 'error',
                    'message' => 'Request Denied!',
                );
            }

            return array(
                'status'  => 'error',
                'message' => $decodedResponse->message,
            );
        } catch (Exception $e) {
            return array(
                'status'  => 'error',
                'message' => 'Server Error!',
            );
        }
    }

    /**
     * Function deleteShipments
     *
     * @param  string $token Token.
     * @param  array  $body Body.
     * @param  string $apiMode Mode.
     * @return array
     */
    public static function deleteShipments($token, $body, $apiMode)
    {
        try {
            $response = self::httpPostRequest(
                self::$appUrl . self::getAPIMode($apiMode) . '/v1/delete-shipments',
                self::getApiHeaders($token),
                $body
            );

            $decodedResponse = json_decode($response['body']);

            if (200 === $response['status_code']) {
                return array(
                    'status'  => 'success',
                    'message' => $decodedResponse,
                );
            }

            return array(
                'status'  => 'error',
                'message' => $decodedResponse->message,
            );
        } catch (Exception $e) {
            return array(
                'status'  => 'error',
                'message' => 'Server Error!',
            );
        }
    }

    /**
     * Function trackShipment
     *
     * @param  string $token Token.
     * @param  array  $body Body.
     * @param  string $apiMode Mode.
     * @return array
     */
    public static function trackShipment($token, $body, $apiMode = 'sandbox')
    {
        try {
            $response = self::httpPostRequest(
                self::$appUrl . self::getAPIMode($apiMode) . '/v1/track-shipment',
                self::getApiHeaders($token),
                $body
            );

            $decodedResponse = json_decode($response['body']);

            if (200 === $response['status_code']) {
                return array(
                    'status'  => 'success',
                    'message' => $decodedResponse,
                );
            }

            return array(
                'status'  => 'error',
                'message' => $decodedResponse->message,
            );
        } catch (Exception $e) {
            return array(
                'status'  => 'error',
                'message' => 'Server Error!',
            );
        }
    }

    /**
     * Function getFlatRateBoxes.
     *
     * @param  string $token Token.
     * @param  array  $body Body.
     * @param  string $apiMode Mode.
     * @return void
     */
    public static function getFlatRateBoxes($token, $body, $apiMode = 'sandbox')
    {
        try {
            $response = self::httpPostRequest(
                self::$appUrl . self::getAPIMode($apiMode) . '/v1/flat-rate-boxes',
                self::getApiHeaders($token),
                self::JSONEncode($body)
            );

            $decodedResponse = json_decode($response['body']);
            if (200 === $response['status_code']) {
                return array(
                    'status'  => 'success',
                    'message' => $decodedResponse,
                );
            }

            return array(
                'status'  => 'error',
                'message' => $decodedResponse->message,
            );
        } catch (Exception $e) {
            return array(
                'status'  => 'error',
                'message' => 'Server Error!',
            );
        }
    }

    /**
     * Function schedulePickup
     *
     * @param  string $token Token.
     * @param  string  $body Body JSON.
     * @param  string $apiMode Mode.
     * @return array
     */
    public static function schedulePickup($token, $body, $apiMode = 'sandbox')
    {
        try {
            $response = self::httpPostRequest(
                self::$appUrl . self::getAPIMode($apiMode) . '/v1/schedule-pickup',
                self::getApiHeaders($token),
                $body
            );

            $decodedResponse = json_decode($response['body']);

            if (200 === $response['status_code']) {
                return array(
                    'status'  => 'success',
                    'message' => $decodedResponse,
                );
            }

            return array(
                'status'  => 'error',
                'message' => $decodedResponse->message,
            );
        } catch (Exception $e) {
            return array(
                'status'  => 'error',
                'message' => 'Server Error!',
            );
        }
    }

    /**
     * Function recoverShipmentURL
     *
     * @param  string $token Token.
     * @param  string  $body Request Body JSON.
     * @param  string $apiMode Mode.
     * @return array
     */
    public static function recoverShipmentURL($token, $body, $apiMode = 'sandbox')
    {
        try {
            $response = self::httpPostRequest(
                self::$appUrl . self::getAPIMode($apiMode) . '/v1/recover-shipment-url',
                self::getApiHeaders($token),
                $body
            );

            $decodedResponse = json_decode($response['body']);

            if (200 === $response['status_code']) {
                return array(
                    'status'  => 'success',
                    'message' => $decodedResponse,
                );
            }

            return array(
                'status'  => 'error',
                'message' => $decodedResponse->message,
            );
        } catch (Exception $e) {
            return array(
                'status'  => 'error',
                'message' => 'Server Error!',
            );
        }
    }
}
