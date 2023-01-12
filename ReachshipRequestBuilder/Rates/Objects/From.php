<?php

/**
 *
 * From Address Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\Rates;

/**
 * From class.
 */
class From
{
    /**
     * Variable cityLocality
     *
     * @var mixed
     */
    private $cityLocality = '';


    /**
     * Variable stateProvince
     *
     * @var mixed
     */
    private $stateProvince = '';


    /**
     * Variable postalCode
     *
     * @var mixed
     */
    private $postalCode = '';

    /**
     * Variable countryCode
     *
     * @var mixed
     */
    private $countryCode = '';

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'city_locality'  => $this->getCityLocality(),
            'state_province' => $this->getStateProvince(),
            'postal_code'    => $this->getPostalCode(),
            'country_code'   => $this->getCountryCode(),
        );

    //    $obj = array_filter((array) $obj);

        return $obj;
    }

    /**
     * Function setCityLocality
     *
     * @param  mixed $cityLocality City Locality.
     * @return void
     */
    public function setCityLocality($cityLocality)
    {
        $this->cityLocality = $cityLocality;
    }

    /**
     * Function getCityLocality
     *
     * @return string
     */
    public function getCityLocality()
    {
        return $this->cityLocality;
    }

    /**
     * Function setStateProvince
     *
     * @param  mixed $stateProvince State Province.
     * @return void
     */
    public function setStateProvince($stateProvince)
    {
        $this->stateProvince = $stateProvince;
    }

    /**
     * Function getStateProvince
     *
     * @return string
     */
    public function getStateProvince()
    {
        return $this->stateProvince;
    }

    /**
     * Function setPostalCode
     *
     * @param  mixed $postalCode Postal Code.
     * @return void
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * Function getPostalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Function setCountryCode
     *
     * @param  mixed $countryCode Country Code.
     * @return void
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * Function getCountryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }
}
