<?php

/**
 *
 * ShipmentOptions Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipment;

/**
 * ShipmentOptions class.
 */
class ShipmentOptions
{
    /**
     * Variable dhlExpressObject
     *
     * @var mixed
     */
    private $dhlExpressObject;

    /**
     * Function getObject Get Object.
     *
     * @return array
     */
    public function getObject()
    {
        return array(
            'dhl_express' => $this->dhlExpress()->getObject(),
        );
    }

    /**
     * Function dhlExpress
     *
     * @return object
     */
    public function dhlExpress()
    {
        if (empty($this->dhlExpressObject)) {
            require_once dirname(__FILE__) . '/DhlExpressShipmentOptions.php';
            $this->dhlExpressObject = new DhlExpressShipmentOptions();
        }
        return $this->dhlExpressObject;
    }
}
