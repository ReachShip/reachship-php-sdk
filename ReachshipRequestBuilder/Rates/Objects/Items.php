<?php

/**
 *
 * Items Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\Rates;

/**
 * Items class.
 */
class Items
{
    /**
     * Variable weight
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
     * Function clear Set Keys as NULL.
     *
     * @return object
     */
    public function clear()
    {
        $this->items = array();
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
