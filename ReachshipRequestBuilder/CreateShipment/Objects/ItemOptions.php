<?php

/**
 *
 * ItemOptions Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipment;

/**
 * ItemOptions class.
 */
class ItemOptions
{
    /**
     * Variable dhlExpressItemOptionsObject
     *
     * @var mixed
     */
    private $dhlExpressItemOptionsObject;

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'dhl_express' => $this->dhlExpress()->getObject(),
        );

        return $obj;
    }

    /**
     * Function dhlExpress
     *
     * @return void
     */
    public function dhlExpress()
    {
        if (empty($this->dhlExpressItemOptionsObject)) {
            require_once dirname(__FILE__) . '/DhlExpressItemOptions.php';
            $this->dhlExpressItemOptionsObject = new DhlExpressItemOptions();
        }
        return $this->dhlExpressItemOptionsObject;
    }
}
