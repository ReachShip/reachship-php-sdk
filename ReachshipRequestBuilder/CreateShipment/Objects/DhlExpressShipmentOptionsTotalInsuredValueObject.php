<?php

/**
 *
 * DhlExpress Shipment Options TotalInsuredValue Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipment;

/**
 * DhlExpressShipmentOptionsTotalInsuredValueObject class.
 */
class DhlExpressShipmentOptionsTotalInsuredValueObject
{
    /**
     * Variable amount
     *
     * @var mixed
     */
    private $amount;

    /**
     * Variable currency
     *
     * @var mixed
     */
    private $currency = '';

    /**
     * Function getObject Get Object.
     *
     * @return array
     */
    public function getObject()
    {
        return array(
            'amount'   => $this->getAmount(),
            'currency' => $this->getCurrency(),
        );
    }

    /**
     * Function getAmount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Function setAmount
     *
     * @param  mixed $amount
     * @return void
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * Function getCurrency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Function setCurrency
     *
     * @param  mixed $currency
     * @return void
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
}
