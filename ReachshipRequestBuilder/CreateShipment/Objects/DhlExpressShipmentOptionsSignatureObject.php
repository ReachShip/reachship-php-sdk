<?php

/**
 *
 * DhlExpress Shipment Options Signature Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipment;

/**
 * DhlExpressShipmentOptionsSignature class.
 */
class DhlExpressShipmentOptionsSignatureObject
{
    /**
     * Variable optionType
     *
     * @var mixed
     */
    private $optionType;

    /**
     * Function getObject Get Object.
     *
     * @return array
     */
    public function getObject()
    {
        return array(
            'option_type' => $this->getOptionType(),
        );
    }

    /**
     * Function getOptionType
     *
     * @return string
     */
    public function getOptionType()
    {
        return $this->optionType;
    }

    /**
     * Function setOptionType
     *
     * @param  mixed $optionType
     * @return void
     */
    public function setOptionType($optionType)
    {
        $this->optionType = $optionType;
    }
}
