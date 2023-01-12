<?php

/**
 *
 * Order Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateOrderMypost;

/**
 * Order class.
 */
class Order
{
    /**
     * Variable orderReference
     *
     * @var mixed
     */
    private $orderReference = '';

    /**
     * Variable shipmentIds
     *
     * @var mixed
     */
    private $shipmentIds = array();

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'order_reference' => $this->getOrderReference(),
            'shipment_ids' => $this->getShipmentIds()
        );

        return $obj;
    }

    /**
     * Function setOrderReference
     *
     * @param  mixed $orderReference orderReference.
     * @return void
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
    }

    /**
     * Function getOrderReference
     *
     * @return string
     */
    public function getOrderReference()
    {
        return $this->orderReference;
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
