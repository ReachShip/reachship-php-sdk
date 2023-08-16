<?php

/**
 *
 * DhlExpressItemOptions Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipment;

/**
 * DhlExpressItemOptions class.
 */
class DhlExpressItemOptions
{
    /**
     * Variable customsLineItems
     *
     * @var mixed
     */
    private $customsLineItems = array();

    /**
     * Variable customsLineItemObject
     *
     * @var mixed
     */
    private $customsLineItemObject;

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'customs' => array(
                'customs_line_items' => $this->getCustomsLineItems(),
            ),
        );

        return $obj;
    }

    /**
     * Function clear Set Keys as NULL.
     *
     * @return object
     */
    public function clear()
    {
        $this->customsLineItems = array();
    }

    /**
     * Function getCustomsLineItems Get Custom Line Items.
     *
     * @return object
     */
    public function getCustomsLineItems()
    {
        return $this->customsLineItems;
    }

    /**
     * Function addCustomsLineItem
     *
     * @param  mixed $customsLineItem Line Item.
     * @return void
     */
    public function addCustomsLineItem($customsLineItem)
    {
        array_push($this->customsLineItems, $customsLineItem);
    }

    /**
     * Function customsLineItem
     *
     * @return object
     */
    public function customsLineItem()
    {
        if (empty($this->customsLineItemObject)) {
            require_once dirname(__FILE__) . '/DhlExpressItemOptionsCustomsLineItem.php';
            $this->customsLineItemObject = new DhlExpressItemOptionsCustomsLineItem();
        }
        return $this->customsLineItemObject;
    }
}
