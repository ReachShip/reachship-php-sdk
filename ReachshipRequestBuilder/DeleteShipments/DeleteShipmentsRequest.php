<?php

/**
 *
 * Delete Shipments File.
 *
 * @package ReachShip Library
 */

namespace Reachship\DeleteShipments;

/**
 * DeleteShipmentsRequest class.
 */
class DeleteShipmentsRequest
{
    /**
     * Variable carrierName
     *
     * @var mixed
     */
    private $carrierName;

    /**
     * Variable trackingIds
     *
     * @var mixed
     */
    private $trackingIds;

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
     * Function setTrackingIds
     *
     * @param  mixed $trackingIds Tracking Ids.
     * @return void
     */
    public function setTrackingIds($trackingIds)
    {
        $this->trackingIds = $trackingIds;
    }

    /**
     * Function getTrackingIds
     *
     * @return string
     */
    public function getTrackingIds()
    {
        return $this->trackingIds;
    }

    /**
     * Function getRequest
     *
     * @return object
     */
    public function getRequest()
    {
        $obj = array(
            'carrier_name' => $this->getCarrierName(),
            'tracking_ids' => $this->getTrackingIds(),
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
