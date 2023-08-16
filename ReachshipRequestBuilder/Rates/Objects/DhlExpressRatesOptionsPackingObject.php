<?php

/**
 *
 * DhlExpress Rates Options Packing Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\Rates;

/**
 * DhlExpressRatesOptionsPackingObject class.
 */
class DhlExpressRatesOptionsPackingObject
{
    /**
     * Variable weightUnit
     *
     * @var mixed
     */
    private $weightUnit = '';

    /**
     * Variable dimensionUnit
     *
     * @var mixed
     */
    private $dimensionUnit = '';


    /**
     * Variable packageType
     *
     * @var mixed
     */
    private $packageType = '';


    /**
     * Function getObject Get Object.
     *
     * @return array
     */
    public function getObject()
    {
        return array(
            'weight_unit'    => $this->getWeightUnit(),
            'dimension_unit' => $this->getDimensionUnit(),
            'package_type'   => $this->getPackageType(),
        );
    }

    /**
     * Function getWeightUnit
     *
     * @return string
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }

    /**
     * Function setWeightUnit
     *
     * @param  mixed $weightUnit
     * @return void
     */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;
    }
    /**
     * Function getDimensionUnit
     *
     * @return string
     */
    public function getDimensionUnit()
    {
        return $this->dimensionUnit;
    }

    /**
     * Function setDimensionUnit
     *
     * @param  mixed $dimensionUnit
     * @return void
     */
    public function setDimensionUnit($dimensionUnit)
    {
        $this->dimensionUnit = $dimensionUnit;
    }

    /**
     * Function getPackageType
     *
     * @return string
     */
    public function getPackageType()
    {
        return $this->packageType;
    }

    /**
     * Function setPackageType
     *
     * @param  mixed $packageType
     * @return void
     */
    public function setPackageType($packageType)
    {
        $this->packageType = $packageType;
    }
}
