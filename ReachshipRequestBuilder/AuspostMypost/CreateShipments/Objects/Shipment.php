<?php

/**
 *
 * Shipment File.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipmentsMyPost;

/**
 * Shipment class.
 */
class Shipment
{
    /**
     * Variable shipFromObject
     *
     * @var mixed
     */
    private $shipFromObject;

    /**
     * Variable shipToObject
     *
     * @var mixed
     */
    private $shipToObject;

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
     * Function shipFrom shipFrom.
     *
     * @return object
     */
    public function shipFrom()
    {
        if (empty($this->shipFromObject)) {
            require_once dirname(__FILE__) . '/From.php';
            $this->shipFromObject = new From();
        }
        return $this->shipFromObject;
    }

    /**
     * Function shipTo shipTo.
     *
     * @return object
     */
    public function shipTo()
    {
        if (empty($this->shipToObject)) {
            require_once dirname(__FILE__) . '/To.php';
            $this->shipToObject = new To();
        }
        return $this->shipToObject;
    }

    /**
     * Function shipmentOptions.
     *
     * @return object
     */
    public function shipmentOptions()
    {
        if (empty($this->shipmentOptionsObject)) {
            require_once dirname(__FILE__) . '/ShipmentOptions.php';
            $this->shipmentOptionsObject = new ShipmentOptions();
        }
        return $this->shipmentOptionsObject;
    }

    /**
     * Function items items.
     *
     * @return object
     */
    public function items()
    {
        if (empty($this->itemsObject)) {
            require_once dirname(__FILE__) . '/Items.php';
            $this->itemsObject = new Items();
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
            require_once dirname(__FILE__) . '/Item.php';
            $this->itemObject = new Item();
        }
        return $this->itemObject;
    }

    /**
     * Function clear Set Keys as NULL.
     *
     * @return object
     */
    public function clear()
    {
        $this->shipFromObject = null;
        $this->shipToObject   = null;
        $this->itemsObject    = null;
        $this->itemObject     = null;
    }

    /**
     * Function getObject
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'ship_from'        => $this->shipFrom()->getObject(),
            'ship_to'          => $this->shipTo()->getObject(),
            'items'            => $this->items()->getItems(),
            'shipment_options' => $this->shipmentOptions()->getObject(),
        );

        return $obj;
    }
}
