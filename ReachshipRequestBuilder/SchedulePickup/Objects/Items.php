<?php

/**
 *
 * Items Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\SchedulePickup;

/**
 * Items class.
 */
class Items
{
    /**
     * Variable items
     *
     * @var mixed
     */
    private $items = array();

    /**
     * Function getItems Get Items.
     *
     * @return object
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Function addItem
     *
     * @param  mixed $item Item.
     * @return void
     */
    public function addItem($item)
    {
        array_push($this->items, $item);
    }
}
