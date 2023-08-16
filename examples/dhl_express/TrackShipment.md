# DHL_EXPRESS Track Shipment Full Schema

```php
<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

// Create Request Builder Instance.
$builder = new ReachshipRequestBuilder();
$request = $builder->trackShipment();

// Request Body.
$request->setCarrierName('DHL_EXPRESS');
$request->setTrackingNumber('123456789');
$request->setAccountName("dhl_express account-1");

// Get JSON.
$requestBody = $request->getRequestJSON();

// Get Token.
$tokenResponse = ReachshipAPIClient::getToken("reachship_client_id", "reachship_client_secret", "sandbox");

// Token.
$token = $tokenResponse['token'];

// Track Shipment.
$trackShipmentResponse = ReachshipAPIClient::trackShipment($token, $requestBody, 'sandbox');

// Response as PHP Array.
$responseBody = $trackShipmentResponse['message'];

error_log(print_r($requestBody, true));

error_log(json_encode(json_decode($requestBody), JSON_PRETTY_PRINT));

```                                                                                                                                                                                                             