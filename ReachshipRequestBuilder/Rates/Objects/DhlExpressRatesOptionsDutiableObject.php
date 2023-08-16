<?php

/**
 *
 * DhlExpress Rates Options Dutiable Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\Rates;

/**
 * DhlExpressRatesOptionsDutiableObject class.
 */
class DhlExpressRatesOptionsDutiableObject
{
    /**
     * Variable totalDeclaredValue
     *
     * @var mixed
     */
    private $totalDeclaredValue;

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
            'total_declared_value' => $this->getTotalDeclaredValue(),
            'currency'             => $this->getCurrency(),
        );
    }

    /**
     * Function getTotalDeclaredValue
     *
     * @return string
     */
    public function getTotalDeclaredValue()
    {
        return $this->totalDeclaredValue;
    }

    /**
     * Function setTotalDeclaredValue
     *
     * @param  mixed $totalDeclaredValue
     * @return void
     */
    public function setTotalDeclaredValue($totalDeclaredValue)
    {
        $this->totalDeclaredValue = $totalDeclaredValue;
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
