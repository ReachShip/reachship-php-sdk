<?php

/**
 *
 * RatesOptions Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\Rates;

/**
 * RatesOptions class.
 */
class RatesOptions
{
    /**
     * Variable carriers
     *
     * @var mixed
     */
    private $carriers = array();

    /**
     * Variable dhlExpressObject
     *
     * @var mixed
     */
    private $dhlExpressObject;

    /**
     * Variable fedexObject
     *
     * @var mixed
     */
    private $fedexObject;

    /**
     * Variable upsObject
     *
     * @var mixed
     */
    private $upsObject;

    /**
     * Variable stampsUspsObject
     *
     * @var mixed
     */
    private $stampsUspsObject;

    /**
     * Variable auspostMypostObject
     *
     * @var mixed
     */
    private $auspostMypostObject;

    /**
     * Function getObject Get Object.
     *
     * @return array
     */
    public function getObject()
    {
        return array(
            'carriers' => $this->carriers,
            'dhl_express' => $this->dhlExpress()->getObject(),
            'auspost_mypost' => $this->auspostMypost()->getObject(),
            'ups' => $this->ups()->getObject(),
            'fedex' => $this->fedex()->getObject(),
            'stamps_usps' => $this->stampsUsps()->getObject(),
        );
    }

    /**
     * Function setCarriers
     *
     * @param  array $carriers carriers.
     * @return void
     */
    public function setCarriers($carriers)
    {
        $this->carriers = $carriers;
    }

    /**
     * Function dhlExpress
     *
     * @return object
     */
    public function dhlExpress()
    {
        if (empty($this->dhlExpressObject)) {
            require_once dirname(__FILE__) . '/DhlExpressRatesOptions.php';
            $this->dhlExpressObject = new DhlExpressRatesOptions();
        }
        return $this->dhlExpressObject;
    }

    /**
     * Function auspostMypost
     *
     * @return object
     */
    public function auspostMypost()
    {
        if (empty($this->auspostMypostObject)) {
            require_once dirname(__FILE__) . '/AuspostMypostRatesOptions.php';
            $this->auspostMypostObject = new AuspostMypostRatesOptions();
        }
        return $this->auspostMypostObject;
    }

    /**
     * Function ups
     *
     * @return object
     */
    public function ups()
    {
        if (empty($this->upsObject)) {
            require_once dirname(__FILE__) . '/UpsRatesOptions.php';
            $this->upsObject = new UpsRatesOptions();
        }
        return $this->upsObject;
    }

    /**
     * Function fedex
     *
     * @return object
     */
    public function fedex()
    {
        if (empty($this->fedexObject)) {
            require_once dirname(__FILE__) . '/FedexRatesOptions.php';
            $this->fedexObject = new FedexRatesOptions();
        }
        return $this->fedexObject;
    }

    /**
     * Function stampsUsps
     *
     * @return object
     */
    public function stampsUsps()
    {
        if (empty($this->stampsUspsObject)) {
            require_once dirname(__FILE__) . '/StampsUspsRatesOptions.php';
            $this->stampsUspsObject = new StampsUspsRatesOptions();
        }
        return $this->stampsUspsObject;
    }
}
