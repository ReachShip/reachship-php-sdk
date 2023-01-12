<?php

/**
 *
 * Shipment Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipment;

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
     * Variable shipDate
     *
     * @var mixed
     */
    private $shipDate;

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
     * Function setShipDate
     *
     * @param  mixed $shipDate shipDate.
     * @return void
     */
    public function setShipDate($shipDate)
    {
        $this->shipDate = $shipDate;
    }

    /**
     * Function getShipDate
     *
     * @return string
     */
    public function getShipDate()
    {
        return $this->shipDate;
    }
}
