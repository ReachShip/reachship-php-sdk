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
    private $carriers = array( 'DHL', 'FEDEX', 'UPS', 'STAMPS_USPS', 'AUSPOST_MYPOST' );

    /**
     * Function getObject Get Object.
     *
     * @return array
     */
    public function getObject()
    {
        return array(
            'carriers' => $this->carriers,
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
}
