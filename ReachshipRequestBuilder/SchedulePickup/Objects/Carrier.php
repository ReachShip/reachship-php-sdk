<?php

/**
 *
 * Carrier Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\SchedulePickup;

/**
 * Carrier class.
 */
class Carrier
{
    /**
     * Variable name
     *
     * @var mixed
     */
    private $name = '';

    /**
     * Variable serviceCode
     *
     * @var mixed
     */
    private $serviceCode = '';

    /**
     * Variable accountName
     *
     * @var mixed
     */
    private $accountName = '';

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'name' => $this->getName(),
            'service_code' => $this->getServiceCode(),
            'account_name' => $this->getAccountName()
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
     * Function setServiceCode
     *
     * @param  mixed $serviceCode serviceCode.
     * @return void
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
    }

    /**
     * Function getServiceCode
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * Function setAccountName
     *
     * @param  mixed $accountName accountName.
     * @return void
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
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
}
