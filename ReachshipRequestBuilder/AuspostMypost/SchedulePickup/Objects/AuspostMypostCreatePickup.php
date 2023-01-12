<?php

/**
 *
 * AuspostMypostCreatePickup Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\SchedulePickupMypost;

use Reachship\SchedulePickupMypost;

/**
 * AuspostMypostCreatePickup class.
 */
class AuspostMypostCreatePickup
{
    /**
     * Variable fromObject
     *
     * @var mixed
     */
    private $fromObject;


    /**
     * Variable pickupDate
     *
     * @var mixed
     */
    private $pickupDate;

    /**
     * Variable pickupProductId
     *
     * @var mixed
     */
    private $pickupProductId;

    /**
     * Variable shipmentIds
     *
     * @var mixed
     */
    private $shipmentIds;

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'from'              => $this->from()->getObject(),
            'pickup_date'       => $this->getPickupDate(),
            'pickup_product_id' => $this->getPickupProductId(),
            'shipment_ids'      => $this->getShipmentIds(),
        );

        return $obj;
    }

    /**
     * Function from From Address Object.
     *
     * @return object
     */
    public function from()
    {
        if (empty($this->fromObject)) {
            require_once dirname(__FILE__) . '/From.php';
            $this->fromObject = new From();
        }
        return $this->fromObject;
    }

    /**
     * Function setPickupDate
     *
     * @param  mixed $pickupDate pickupDate.
     * @return void
     */
    public function setPickupDate($pickupDate)
    {
        $this->pickupDate = $pickupDate;
    }

    /**
     * Function getPickupDate
     *
     * @return string
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }

    /**
     * Function setPickupProductId
     *
     * @param  mixed $pickupProductId pickupProductId.
     * @return void
     */
    public function setPickupProductId($pickupProductId)
    {
        $this->pickupProductId = $pickupProductId;
    }

    /**
     * Function getPickupProductId
     *
     * @return string
     */
    public function getPickupProductId()
    {
        return $this->pickupProductId;
    }

    /**
     * Function setShipmentIds
     *
     * @param  mixed $shipmentIds shipmentIds.
     * @return void
     */
    public function setShipmentIds($shipmentIds)
    {
        $this->shipmentIds = $shipmentIds;
    }

    /**
     * Function getShipmentIds
     *
     * @return string
     */
    public function getShipmentIds()
    {
        return $this->shipmentIds;
    }
}
