<?php

/**
 *
 * To Address Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipmentsMyPost;

/**
 * To class.
 */
class To
{
    /**
     * Variable name
     *
     * @var mixed
     */
    private $name = '';

    /**
     * Variable businessName
     *
     * @var mixed
     */
    private $businessName = '';

    /**
     * Variable addressType
     *
     * @var mixed
     */
    private $addressType = '';

    /**
     * Variable phone
     *
     * @var mixed
     */
    private $phone = null;

    /**
     * Variable email
     *
     * @var mixed
     */
    private $email = '';


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
     * Variable countryCode
     *
     * @var mixed
     */
    private $countryCode = '';

    /**
     * Variable deliveryInstructions
     *
     * @var mixed
     */
    private $deliveryInstructions = '';

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
            'email'          => $this->getEmail(),
            'address_line_1' => $this->getAddressLine1(),
            'address_line_2' => $this->getAddressLine2(),
            'city_locality'  => $this->getCityLocality(),
            'state_province' => $this->getStateProvince(),
            'postal_code'    => $this->getPostalCode(),
            'country_code'   => $this->getCountryCode(),
            'business_name'  => $this->getBusinessName(),
            'address_type'   => $this->getAddressType(),
            'delivery_instructions' => $this->getDeliveryInstructions()
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
     * Function setBusinessName
     *
     * @param  mixed $businessName businessName.
     * @return void
     */
    public function setBusinessName($businessName)
    {
        $this->businessName = $businessName;
    }

    /**
     * Function getBusinessName
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->businessName;
    }

    /**
     * Function setAddressType
     *
     * @param  mixed $addressType addressType.
     * @return void
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;
    }

    /**
     * Function getAddressType
     *
     * @return string
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    /**
     * Function setPhone
     *
     * @param  mixed $dialCode Dial Code.
     * @param  mixed $rawPhone Phone Number.
     * @return void
     */
    public function setPhone($rawPhone, $dialCode = null)
    {
        $this->phone = array(
            'dial_code' => $dialCode,
            'raw_phone' => $rawPhone,
        );
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
     * Function setEmail
     *
     * @param  mixed $email email.
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Function getEmail
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
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

    /**
     * Function setDeliveryInstructions
     *
     * @param  mixed $deliveryInstructions deliveryInstructions.
     * @return void
     */
    public function setDeliveryInstructions($deliveryInstructions)
    {
        $this->deliveryInstructions = $deliveryInstructions;
    }

    /**
     * Function getDeliveryInstructions
     *
     * @return string
     */
    public function getDeliveryInstructions()
    {
        return $this->deliveryInstructions;
    }
}
