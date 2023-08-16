<?php

/**
 *
 * DhlExpress Shipment Options TotalInsuredValue Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipment;

/**
 * DhlExpressShipmentOptionsDutiableObject class.
 */
class DhlExpressShipmentOptionsDutiableObject
{
    /**
     * Variable declaredValue
     *
     * @var mixed
     */
    private $declaredValue;

    /**
     * Variable declaredCurrency
     *
     * @var mixed
     */
    private $declaredCurrency = '';

    /**
     * Variable termsOfTrade
     *
     * @var mixed
     */
    private $termsOfTrade = '';

    /**
     * Variable dutyAccountNumber
     *
     * @var mixed
     */
    private $dutyAccountNumber = '';

    /**
     * Function getObject Get Object.
     *
     * @return array
     */
    public function getObject()
    {
        return array(
            'declared_value'      => $this->getDeclaredValue(),
            'declared_currency'   => $this->getDeclaredCurrency(),
            'terms_of_trade'      => $this->getTermsOfTrade(),
            'duty_account_number' => $this->getDutyAccountNumber(),
        );
    }

    /**
     * Function getDeclaredValue
     *
     * @return string
     */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }

    /**
     * Function setAmount
     *
     * @param  mixed $declaredValue
     * @return void
     */
    public function setDeclaredValue($declaredValue)
    {
        $this->declaredValue = $declaredValue;
    }

    /**
     * Function getDeclaredCurrency
     *
     * @return string
     */
    public function getDeclaredCurrency()
    {
        return $this->declaredCurrency;
    }

    /**
     * Function setDeclaredCurrency
     *
     * @param  mixed $declaredCurrency
     * @return void
     */
    public function setDeclaredCurrency($declaredCurrency)
    {
        $this->declaredCurrency = $declaredCurrency;
    }

     /**
      * Function getTermsOfTrade
      *
      * @return string
      */
    public function getTermsOfTrade()
    {
        return $this->termsOfTrade;
    }

    /**
     * Function setTermsOfTrade
     *
     * @param  mixed $termsOfTrade
     * @return void
     */
    public function setTermsOfTrade($termsOfTrade)
    {
        $this->termsOfTrade = $termsOfTrade;
    }

     /**
      * Function getDutyAccountNumber
      *
      * @return string
      */
    public function getDutyAccountNumber()
    {
        return $this->dutyAccountNumber;
    }

    /**
     * Function setDutyAccountNumber
     *
     * @param  mixed $dutyAccountNumber
     * @return void
     */
    public function setDutyAccountNumber($dutyAccountNumber)
    {
        $this->dutyAccountNumber = $dutyAccountNumber;
    }
}
