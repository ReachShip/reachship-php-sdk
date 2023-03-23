<?php

/**
 *
 * Track Shipment File.
 *
 * @package ReachShip Library
 */

namespace Reachship\TrackShipment;

/**
 * TrackShipmentRequest class.
 */
class TrackShipmentRequest
{
    /**
     * Variable carrierName
     *
     * @var mixed
     */
    private $carrierName;

    /**
     * Variable trackingNumber
     *
     * @var mixed
     */
    private $trackingNumber;

    /**
     * Variable accountName
     *
     * @var mixed
     */
    private $accountName;

    /**
     * Function setCarrierName
     *
     * @param  mixed $carrierName City Locality.
     * @return void
     */
    public function setCarrierName($carrierName)
    {
        $this->carrierName = $carrierName;
    }

    /**
     * Function getCarrierName
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->carrierName;
    }

    /**
     * Function setTrackingNumber
     *
     * @param  mixed $trackingNumber City Locality.
     * @return void
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
    }

    /**
     * Function getTrackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * Function setAccountName
     *
     * @param  mixed $accountName accountName.
     * @return void
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    /**
     * Function getAccountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Function getRequest
     *
     * @return object
     */
    public function getRequest()
    {
        $obj = array(
            'carrier_name'    => $this->getCarrierName(),
            'tracking_number' => $this->getTrackingNumber(),
            'account_name'    => $this->getAccountName()
        );

        $obj = $this->mapDeepAndStripEmptyValues($obj, 'array_filter');

        return $obj;
    }

    /**
     * Function mapDeepAndStripEmptyValues.
     *
     * @param  mixed $value Value
     * @param  mixed $callback Callback
     * @return array
     */
    public function mapDeepAndStripEmptyValues($value, $callback)
    {
        if (is_array($value)) {
            foreach ($value as $index => $item) {
                if (empty($item) && !is_bool($item)) {
                    unset($value[$index]);
                    //  If numeric index, reindex and return.
                    if (is_numeric($index)) {
                        return array_values($value);
                    }
                } elseif (is_array($item)) {
                    $value[$index] = $this->mapDeepAndStripEmptyValues($item, $callback);
                    if (empty($value[$index]) && !is_bool($value[$index])) {
                        unset($value[$index]);
                        //  If numeric index, reindex and return.
                        if (is_numeric($index)) {
                            return array_values($value);
                        }
                    }
                }
            }
        }

        return $value;
    }

    /**
     * Function getRequestJSON
     *
     * @return array
     */
    public function getRequestJSON()
    {
        return json_encode($this->getRequest());
    }
}
