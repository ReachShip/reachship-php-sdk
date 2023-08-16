<?php

/**
 *
 * Pickup Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateOrderAndPickupMypost;

/**
 * Pickup class.
 */
class Pickup
{
    /**
     * Variable pickupIds
     *
     * @var mixed
     */
    private $pickupIds = array();

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'pickup_ids' => $this->getPickupIds(),
        );

        return $obj;
    }

    /**
     * Function setPickupIds
     *
     * @param  mixed $pickupIds pickupIds.
     * @return void
     */
    public function setPickupIds($pickupIds)
    {
        $this->pickupIds = $pickupIds;
    }

    /**
     * Function getPickupIds
     *
     * @return string
     */
    public function getPickupIds()
    {
        return $this->pickupIds;
    }
}
