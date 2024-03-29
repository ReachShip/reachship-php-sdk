<?php

/**
 *
 * Schedule Pickup File.
 *
 * @package ReachShip Library
 */

use Reachship\SchedulePickup;

/**
 * SchedulePickupRequest class.
 */
class SchedulePickupRequest
{
    /**
     * Variable carrier
     *
     * @var mixed
     */
    private $carrierObject;

    /**
     * Variable shipper
     *
     * @var mixed
     */
    private $shipperObject;

    /**
     * Variable items
     *
     * @var mixed
     */
    private $itemsObject;

    /**
     * Variable item
     *
     * @var mixed
     */
    private $itemObject;

    /**
     * Variable pickupWindow
     *
     * @var mixed
     */
    private $pickupWindowObject;

    /**
     * Variable trackingIds
     *
     * @var mixed
     */
    private $trackingIds;

    /**
     * Variable destinationCountryCode
     *
     * @var mixed
     */
    private $destinationCountryCode;

    /**
     * Function carrier Carrier.
     *
     * @return object
     */
    public function carrier()
    {
        if (empty($this->carrierObject)) {
            require_once dirname(__FILE__) . '/Objects/Carrier.php';
            $this->carrierObject = new Reachship\SchedulePickup\Carrier();
        }
        return $this->carrierObject;
    }

    /**
     * Function shipper shipper.
     *
     * @return object
     */
    public function shipper()
    {
        if (empty($this->shipperObject)) {
            require_once dirname(__FILE__) . '/Objects/Shipper.php';
            $this->shipperObject = new Reachship\SchedulePickup\Shipper();
        }
        return $this->shipperObject;
    }

    /**
     * Function items items.
     *
     * @return object
     */
    public function items()
    {
        if (empty($this->itemsObject)) {
            require_once dirname(__FILE__) . '/Objects/Items.php';
            $this->itemsObject = new Reachship\SchedulePickup\Items();
        }
        return $this->itemsObject;
    }

    /**
     * Function item item.
     *
     * @return object
     */
    public function item()
    {
        if (empty($this->itemObject)) {
            require_once dirname(__FILE__) . '/Objects/Item.php';
            $this->itemObject = new Reachship\SchedulePickup\Item();
        }
        return $this->itemObject;
    }

    /**
     * Function pickupWindow pickupWindow.
     *
     * @return object
     */
    public function pickupWindow()
    {
        if (empty($this->pickupWindowObject)) {
            require_once dirname(__FILE__) . '/Objects/PickupWindow.php';
            $this->pickupWindowObject = new Reachship\SchedulePickup\PickupWindow();
        }
        return $this->pickupWindowObject;
    }

    /**
     * Function getTrackingIds Get Tracking Ids.
     *
     * @return object
     */
    public function getTrackingIds()
    {
        return $this->trackingIds;
    }

    /**
     * Function setTrackingIds
     *
     * @param  mixed $trackingIds trackingIds.
     * @return void
     */
    public function setTrackingIds($trackingIds)
    {
        $this->trackingIds = $trackingIds;
    }


     /**
      * Function getDestinationCountryCode .
      *
      * @return object
      */
    public function getDestinationCountryCode()
    {
        return $this->destinationCountryCode;
    }

     /**
      * Function setDestinationCountryCode
      *
      * @param  mixed $destinationCountryCode destinationCountryCode.
      * @return void
      */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->destinationCountryCode = $destinationCountryCode;
    }

    /**
     * Function clear Set Keys as NULL.
     *
     * @return object
     */
    public function clear()
    {
        $this->shipperObject      = null;
        $this->carrierObject      = null;
        $this->itemsObject        = null;
        $this->itemObject         = null;
        $this->pickupWindowObject = null;
        $this->trackingIds        = null;
    }

    /**
     * Function getRequest
     *
     * @return object
     */
    public function getRequest()
    {
        $obj = array(
            'shipper'                  => $this->shipper()->getObject(),
            'carrier'                  => $this->carrier()->getObject(),
            'pickup_window'            => $this->pickupWindow()->getObject(),
            'packages'                 => $this->items()->getItems(),
            'tracking_ids'             => $this->getTrackingIds(),
            'destination_country_code' => $this->getDestinationCountryCode(),
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
                if (empty($item) && ! is_bool($item)) {
                    unset($value[ $index ]);
                    // If numeric index, reindex and return.
                    if (is_numeric($index)) {
                        return array_values($value);
                    }
                } elseif (is_array($item)) {
                    $value[ $index ] = $this->mapDeepAndStripEmptyValues($item, $callback);
                    if (empty($value[ $index ]) && ! is_bool($value[ $index ])) {
                        unset($value[ $index ]);
                        // If numeric index, reindex and return.
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
     * @return object
     */
    public function getRequestJSON()
    {
        return json_encode($this->getRequest());
    }
}
