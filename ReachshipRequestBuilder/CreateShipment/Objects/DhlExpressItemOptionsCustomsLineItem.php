<?php

/**
 *
 * DhlExpressItemOptionsCustomsLineItem Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipment;

/**
 * DhlExpressItemOptionsCustomsLineItem class.
 */
class DhlExpressItemOptionsCustomsLineItem
{
    /**
     * Variable itemDescription
     *
     * @var mixed
     */
    private $itemDescription;

    /**
     * Variable countryOfManufacture
     *
     * @var mixed
     */
    private $countryOfManufacture;

    /**
     * Variable quantity
     *
     * @var mixed
     */
    private $quantity;

    /**
     * Variable grossWeightInKGS
     *
     * @var mixed
     */
    private $grossWeightInKGS;

    /**
     * Variable netWeightInKGS
     *
     * @var mixed
     */
    private $netWeightInKGS;

    /**
     * Variable declaredValue
     *
     * @var mixed
     */
    private $declaredValue;

    /**
     * Variable commodityCode
     *
     * @var mixed
     */
    private $commodityCode;

    /**
     * Variable importCommodityCode
     *
     * @var mixed
     */
    private $importCommodityCode;

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'item_description'       => $this->getItemDescription(),
            'country_of_manufacture' => $this->getCountryOfManufacture(),
            'quantity'               => $this->getQuantity(),
            'gross_weight_in_kgs'    => $this->getGrossWeightInKGS(),
            'net_weight_in_kgs'      => $this->getNetWeightInKGS(),
            'declared_value'         => $this->getDeclaredValue(),
            'commodity_code'         => $this->getCommodityCode(),
            'import_commodity_code'  => $this->getImportCommodityCode(),
        );

        return $obj;
    }

    /**
     * Function clear Set Keys as NULL.
     *
     * @return object
     */
    public function clear()
    {
        $this->setItemDescription(null);
        $this->setCountryOfManufacture(null);
        $this->setQuantity(null);
        $this->setGrossWeightInKGS(null);
        $this->setNetWeightInKGS(null);
        $this->setDeclaredValue(null);
        $this->setCommodityCode(null);
        $this->setImportCommodityCode(null);
    }

    /**
     * Function setItemDescription
     *
     * @param  mixed $itemDescription itemDescription.
     * @return string
     */
    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = $itemDescription;
    }

    /**
     * Function getItemDescription
     *
     * @return string
     */
    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    /**
     * Function setCountryOfManufacture
     *
     * @param  mixed $countryOfManufacture countryOfManufacture.
     * @return void
     */
    public function setCountryOfManufacture($countryOfManufacture)
    {
        $this->countryOfManufacture = $countryOfManufacture;
    }

    /**
     * Function getCountryOfManufacture
     *
     * @return string
     */
    public function getCountryOfManufacture()
    {
        return $this->countryOfManufacture;
    }

    /**
     * Function setQuantity
     *
     * @param  mixed $quantity quantity.
     * @return void
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Function getQuantity
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Function setGrossWeightInKGS
     *
     * @param  mixed $grossWeightInKGS grossWeightInKGS.
     * @return void
     */
    public function setGrossWeightInKGS($grossWeightInKGS)
    {
        $this->grossWeightInKGS = $grossWeightInKGS;
    }

    /**
     * Function getGrossWeightInKGS
     *
     * @return number
     */
    public function getGrossWeightInKGS()
    {
        return $this->grossWeightInKGS;
    }

    /**
     * Function setNetWeightInKGS
     *
     * @param  mixed $netWeightInKGS netWeightInKGS.
     * @return void
     */
    public function setNetWeightInKGS($netWeightInKGS)
    {
        $this->netWeightInKGS = $netWeightInKGS;
    }

    /**
     * Function getNetWeightInKGS
     *
     * @return number
     */
    public function getNetWeightInKGS()
    {
        return $this->netWeightInKGS;
    }

    /**
     * Function setDeclaredValue
     *
     * @param  mixed $declaredValue declaredValue.
     * @return void
     */
    public function setDeclaredValue($declaredValue)
    {
        $this->declaredValue = $declaredValue;
    }

    /**
     * Function getDeclaredValue
     *
     * @return number
     */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }

    /**
     * Function setCommodityCode
     *
     * @param  mixed $commodityCode commodityCode.
     * @return void
     */
    public function setCommodityCode($commodityCode)
    {
        $this->commodityCode = $commodityCode;
    }

    /**
     * Function getCommodityCode
     *
     * @return string
     */
    public function getCommodityCode()
    {
        return $this->commodityCode;
    }

    /**
     * Function setImportCommodityCode
     *
     * @param  mixed $importCommodityCode importCommodityCode.
     * @return void
     */
    public function setImportCommodityCode($importCommodityCode)
    {
        $this->importCommodityCode = $importCommodityCode;
    }

    /**
     * Function getImportCommodityCode
     *
     * @return string
     */
    public function getImportCommodityCode()
    {
        return $this->importCommodityCode;
    }
}
