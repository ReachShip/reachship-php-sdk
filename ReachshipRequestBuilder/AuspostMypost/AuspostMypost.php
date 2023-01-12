<?php

/**
 *
 * AuspostMypost File.
 *
 * @package ReachShip Library
 */

use Reachship\SchedulePickupMypost;
use Reachship\DeleteShipmentsMypost;
use Reachship\CreateOrderMypost;
use Reachship\CreateOrderAndPickupMypost;
use Reachship\CreateLabelMypost;
use Reachship\CreateShipmentsMypost;

/**
 * AuspostMypost class.
 */
class AuspostMypost
{
    /**
     * Variable orderObject
     *
     * @var mixed
     */
    private $orderObject;

    /**
     * Variable labelObject
     *
     * @var mixed
     */
    private $labelObject;

    /**
     * Variable orderAndPickupObject
     *
     * @var mixed
     */
    private $orderAndPickupObject;

    /**
     * Variable schedulePickupObject
     *
     * @var mixed
     */
    private $schedulePickupObject;

    /**
     * Variable deleteShipmentsObject
     *
     * @var mixed
     */
    private $deleteShipmentsObject;

    /**
     * Function createShipments
     *
     * @return object
     */
    public function createShipments()
    {
        if (empty($this->orderObject)) {
            require_once dirname(__FILE__) . '/CreateShipments/CreateShipmentsRequest.php';
            $this->orderObject = new Reachship\CreateShipmentsMypost\CreateShipmentsRequest();
        }
        return $this->orderObject;
    }

    /**
     * Function createOrder
     *
     * @return object
     */
    public function createOrder()
    {
        if (empty($this->orderObject)) {
            require_once dirname(__FILE__) . '/CreateOrder/CreateOrderRequest.php';
            $this->orderObject = new Reachship\CreateOrderMypost\CreateOrderRequest();
        }
        return $this->orderObject;
    }

    /**
     * Function createOrderAndPickup
     *
     * @return object
     */
    public function createOrderAndPickup()
    {
        if (empty($this->orderAndPickupObject)) {
            require_once dirname(__FILE__) . '/CreateOrderAndPickup/CreateOrderAndPickupRequest.php';
            $this->orderAndPickupObject = new Reachship\CreateOrderAndPickupMypost\CreateOrderAndPickupRequest();
        }
        return $this->orderAndPickupObject;
    }

    /**
     * Function createLabel
     *
     * @return object
     */
    public function createLabel()
    {
        if (empty($this->labelObject)) {
            require_once dirname(__FILE__) . '/CreateLabel/CreateLabelRequest.php';
            $this->labelObject = new Reachship\CreateLabelMypost\CreateLabelRequest();
        }
        return $this->labelObject;
    }

    /**
     * Function schedulePickup
     *
     * @return object
     */
    public function schedulePickup()
    {
        if (empty($this->schedulePickupObject)) {
            require_once dirname(__FILE__) . '/SchedulePickup/SchedulePickupRequest.php';
            $this->schedulePickupObject = new Reachship\SchedulePickupMypost\SchedulePickupRequest();
        }
        return $this->schedulePickupObject;
    }

    /**
     * Function deleteShipments
     *
     * @return object
     */
    public function deleteShipments()
    {
        if (empty($this->deleteShipmentsObject)) {
            require_once dirname(__FILE__) . '/DeleteShipments/DeleteShipmentsRequest.php';
            $this->deleteShipmentsObject = new Reachship\DeleteShipmentsMypost\DeleteShipmentsRequest();
        }
        return $this->deleteShipmentsObject;
    }
}
