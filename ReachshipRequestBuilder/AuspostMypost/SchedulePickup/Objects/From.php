<?php

/**
 *
 * From Address Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\SchedulePickupMypost;

/**
 * From class.
 */
class From
{
    /**
     * Variable name
     *
     * @var mixed
     */
    private $name = '';


    /**
     * Variable phone
     *
     * @var mixed
     */
    private $phone = '';


    /**
     * Variable addressLine1
     *
     * @var mixed
     */
    private $addressLine1 = '';

    /**
     * Variable addressLine2
     *
     * @var mixed
     */
    private $addressLine2 = '';

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
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'name'           => $this->getName(),
            'phone'          => $this->getPhone(),
            'address_line_1' => $this->getAddressLine1(),
            'address_line_2' => $this->getAddressLine2(),
            'city_locality'  => $this->getCityLocality(),
            'state_province' => $this->getStateProvince(),
            'postal_code'    => $this->getPostalCode(),
        );

        return $obj;
    }

    /**
     * Function setName
     *
     * @param  mixed $name Name.
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Function getName
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Function setPhone
     *
     * @param  mixed $rawPhone Phone Number.
     * @return void
     */
    public function setPhone($rawPhone)
    {
        $this->phone = $rawPhone;
    }

    /**
     * Function getPhone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Function setAddressLine1
     *
     * @param  mixed $addressLine1 addressLine1.
     * @return void
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * Function getAddressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * Function setAddressLine2
     *
     * @param  mixed $addressLine2 addressLine2.
     * @return void
     */
    public function setAddressLine2($addressLine2)
    {
        $this->addressLine2 = $addressLine2;
    }

    /**
     * Function getAddressLine2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
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
}
