<?php

/**
 *
 * MyPost Rates Options Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\Rates;

/**
 * AuspostMypostRatesOptions class.
 */
class AuspostMypostRatesOptions
{
    /**
     * Variable accountName
     *
     * @var mixed
     */
    private $accountName = '';

    /**
     * Function getObject Get Object.
     *
     * @return array
     */
    public function getObject()
    {
        return array(
            'account_name' => $this->getAccountName(),
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
}
