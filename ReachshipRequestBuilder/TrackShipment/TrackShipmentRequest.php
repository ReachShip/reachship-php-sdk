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
     * Function getRequest
     *
     * @return object
     */
    public function getRequest()
    {
        $obj = array(
            'carrier_name'    => $this->getCarrierName(),
            'tracking_number' => $this->getTrackingNumber(),
        );

        $obj = $this->mapDeepAndStripEmptyValues($obj, 'array_filter');

        return $obj;
    }

    public function mapDeepAndStripEmptyValues($value, $callback)
    {
        if (is_array($value)) {
            foreach ($value as $index => $item) {
                if (empty($item)) {
                    unset($value[$index]);
                    //  If numeric index, reindex and return.
                    if (is_numeric($index)) {
                        return array_values($value);
                    }
                } elseif (is_array($item)) {
                    $value[$index] = $this->mapDeepAndStripEmptyValues($item, $callback);
                    if (empty($value[$index])) {
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
        return json_encode($this->getRequest(), JSON_PRETTY_PRINT);
    }
}
