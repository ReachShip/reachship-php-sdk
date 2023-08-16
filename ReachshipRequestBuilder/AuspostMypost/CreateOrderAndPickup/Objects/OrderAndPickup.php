<?php

/**
 *
 * OrderAndPickup Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateOrderAndPickupMypost;

/**
 * OrderAndPickup class.
 */
class OrderAndPickup
{
    /**
     * Variable orderObject
     *
     * @var mixed
     */
    private $orderObject;

    /**
     * Variable pickupObject
     *
     * @var mixed
     */
    private $pickupObject;

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'order'  => $this->order()->getObject(),
            'pickup' => $this->pickup()->getObject(),
        );

        return $obj;
    }

    /**
     * Function order order.
     *
     * @return object
     */
    public function order()
    {
        if (empty($this->orderObject)) {
            require_once dirname(__FILE__) . '/Order.php';
            $this->orderObject = new Order();
        }
        return $this->orderObject;
    }

    /**
     * Function pickup pickup.
     *
     * @return object
     */
    public function pickup()
    {
        if (empty($this->pickupObject)) {
            require_once dirname(__FILE__) . '/Pickup.php';
            $this->pickupObject = new Pickup();
        }
        return $this->pickupObject;
    }
}
