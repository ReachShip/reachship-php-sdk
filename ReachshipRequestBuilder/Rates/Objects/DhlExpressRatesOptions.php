<?php

/**
 *
 * DhlExpress Rates Options Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\Rates;

/**
 * DhlExpressRatesOptions class.
 */
class DhlExpressRatesOptions
{
    /**
     * Variable accountName
     *
     * @var mixed
     */
    private $accountName = '';

    /**
     * Variable showCheapestRatesOnly
     *
     * @var mixed
     */
    private $showCheapestRatesOnly = '';

    /**
     * Variable cheapestMethodTitle
     *
     * @var mixed
     */
    private $cheapestMethodTitle = '';

    /**
     * Variable excludeDhlTax
     *
     * @var mixed
     */
    private $excludeDhlTax = '';

    /**
     * Variable workingDays
     *
     * @var mixed
     */
    private $workingDays = array();

    /**
     * Variable cutoffTime
     *
     * @var mixed
     */
    private $cutoffTime = '';

    /**
     * Variable leadTimeDays
     *
     * @var mixed
     */
    private $leadTimeDays = null;

    /**
     * Variable supportedCountries
     *
     * @var mixed
     */
    private $supportedCountries = array();

    /**
     * Variable blockedCountries
     *
     * @var mixed
     */
    private $blockedCountries = array();

    /**
     * Variable showDhlAccountRates
     *
     * @var mixed
     */
    private $showDhlAccountRates = '';

    /**
     * Variable utf8Support
     *
     * @var mixed
     */
    private $utf8Support = '';

    /**
     * Variable accountPaymentCountry
     *
     * @var mixed
     */
    private $accountPaymentCountry = '';

    /**
     * Variable packingObject
     *
     * @var mixed
     */
    private $packingObject = null;

    /**
     * Variable insuranceObject
     *
     * @var mixed
     */
    private $insuranceObject = null;

    /**
     * Variable dutiableObject
     *
     * @var mixed
     */
    private $dutiableObject = null;

    /**
     * Function getObject Get Object.
     *
     * @return array
     */
    public function getObject()
    {
        return array(
            'account_name'             => $this->getAccountName(),
            'show_cheapest_rates_only' => $this->getShowCheapestRatesOnly(),
            'cheapest_method_title'    => $this->getCheapestMethodTitle(),
            'exclude_dhl_tax'          => $this->getExcludeDhlTax(),
            'working_days'             => $this->getWorkingDays(),
            'cutoff_time'              => $this->getCutoffTime(),
            'lead_time_days'           => $this->getLeadTimeDays(),
            'supported_countries'      => $this->getSupportedCountries(),
            'blocked_countries'        => $this->getBlockedCountries(),
            'show_dhl_account_rates'   => $this->getShowDhlAccountRates(),
            'utf_8'                    => $this->getUtf8Support(),
            'account_payment_country'  => $this->getAccountPaymentCountry(),
            'packing'                  => $this->packing()->getObject(),
            'insurance'                => $this->insurance()->getObject(),
            'dutiable'                 => $this->dutiable()->getObject(),
        );
    }

    /**
     * Function getAccountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Function setAccountName
     *
     * @param  mixed $accountName
     * @return void
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }

    /**
     * Function getShowCheapestRatesOnly
     *
     * @return string
     */
    public function getShowCheapestRatesOnly()
    {
        return $this->showCheapestRatesOnly;
    }

    /**
     * Function setShowCheapestRatesOnly
     *
     * @param  mixed $showCheapestRatesOnly
     * @return void
     */
    public function setShowCheapestRatesOnly($showCheapestRatesOnly)
    {
        $this->showCheapestRatesOnly = $showCheapestRatesOnly;
    }

     /**
      * Function getCheapestMethodTitle
      *
      * @return string
      */
    public function getCheapestMethodTitle()
    {
        return $this->cheapestMethodTitle;
    }

    /**
     * Function setCheapestMethodTitle
     *
     * @param  mixed $cheapestMethodTitle
     * @return void
     */
    public function setCheapestMethodTitle($cheapestMethodTitle)
    {
        $this->cheapestMethodTitle = $cheapestMethodTitle;
    }

    /**
     * Function getExcludeDhlTax
     *
     * @return string
     */
    public function getExcludeDhlTax()
    {
        return $this->excludeDhlTax;
    }

    /**
     * Function setExcludeDhlTax
     *
     * @param  mixed $excludeDhlTax
     * @return void
     */
    public function setExcludeDhlTax($excludeDhlTax)
    {
        $this->excludeDhlTax = $excludeDhlTax;
    }

    /**
     * Function getCutoffTime
     *
     * @return string
     */
    public function getCutoffTime()
    {
        return $this->cutoffTime;
    }

    /**
     * Function setCutoffTime
     *
     * @param  mixed $cutoffTime
     * @return void
     */
    public function setCutoffTime($cutoffTime)
    {
        $this->cutoffTime = $cutoffTime;
    }


    /**
     * Function getWorkingDays
     *
     * @return array
     */
    public function getWorkingDays()
    {
        return $this->workingDays;
    }

    /**
     * Function setWorkingDays
     *
     * @param  array $workingDays
     * @return void
     */
    public function setWorkingDays($workingDays)
    {
        $this->workingDays = $workingDays;
    }

    /**
     * Function getLeadTimeDays
     *
     * @return string
     */
    public function getLeadTimeDays()
    {
        return $this->leadTimeDays;
    }

    /**
     * Function setLeadTimeDays
     *
     * @param  mixed $leadTimeDays
     * @return void
     */
    public function setLeadTimeDays($leadTimeDays)
    {
        $this->leadTimeDays = $leadTimeDays;
    }

    /**
     * Function getSupportedCountries
     *
     * @return array
     */
    public function getSupportedCountries()
    {
        return $this->supportedCountries;
    }

    /**
     * Function setSupportedCountries
     *
     * @param  array $supportedCountries
     * @return void
     */
    public function setSupportedCountries($supportedCountries)
    {
        $this->supportedCountries = $supportedCountries;
    }

    /**
     * Function getBlockedCountries
     *
     * @return array
     */
    public function getBlockedCountries()
    {
        return $this->blockedCountries;
    }

    /**
     * Function setBlockedCountries
     *
     * @param array $blockedCountries
     * @return void
     */
    public function setBlockedCountries($blockedCountries)
    {
        $this->blockedCountries = $blockedCountries;
    }

    /**
     * Function getShowDhlAccountRates
     *
     * @return string
     */
    public function getShowDhlAccountRates()
    {
        return $this->showDhlAccountRates;
    }

    /**
     * Function setShowDhlAccountRates
     *
     * @param  mixed $showDhlAccountRates
     * @return void
     */
    public function setShowDhlAccountRates($showDhlAccountRates)
    {
        $this->showDhlAccountRates = $showDhlAccountRates;
    }

    /**
     * Function getUtf8Support
     *
     * @return string
     */
    public function getUtf8Support()
    {
        return $this->utf8Support;
    }

    /**
     * Function setUtf8Support
     *
     * @param  mixed $utf8Support
     * @return void
     */
    public function setUtf8Support($utf8Support)
    {
        $this->utf8Support = $utf8Support;
    }

    /**
     * Function getAccountPaymentCountry
     *
     * @return string
     */
    public function getAccountPaymentCountry()
    {
        return $this->accountPaymentCountry;
    }

    /**
     * Function setAccountPaymentCountry
     *
     * @param  mixed $accountPaymentCountry
     * @return void
     */
    public function setAccountPaymentCountry($accountPaymentCountry)
    {
        $this->accountPaymentCountry = $accountPaymentCountry;
    }

    /**
     * Function packing Packing.
     *
     * @return object
     */
    public function packing()
    {
        if (empty($this->packingObject)) {
            require_once dirname(__FILE__) . '/DhlExpressRatesOptionsPackingObject.php';
            $this->packingObject = new DhlExpressRatesOptionsPackingObject();
        }
        return $this->packingObject;
    }

    /**
     * Function insurance Insurance.
     *
     * @return object
     */
    public function insurance()
    {
        if (empty($this->insuranceObject)) {
            require_once dirname(__FILE__) . '/DhlExpressRatesOptionsInsuranceObject.php';
            $this->insuranceObject = new DhlExpressRatesOptionsInsuranceObject();
        }
        return $this->insuranceObject;
    }

    /**
     * Function dutiable Dutiable.
     *
     * @return object
     */
    public function dutiable()
    {
        if (empty($this->dutiableObject)) {
            require_once dirname(__FILE__) . '/DhlExpressRatesOptionsDutiableObject.php';
            $this->dutiableObject = new DhlExpressRatesOptionsDutiableObject();
        }
        return $this->dutiableObject;
    }
}
