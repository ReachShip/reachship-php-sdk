<?php

/**
 *
 * AuspostMypostItemOptionsItemContent Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipmentsMyPost;

/**
 * AuspostMypostItemOptionsItemContent class.
 */
class AuspostMypostItemOptionsItemContent
{
    /**
     * Variable tariffCode
     *
     * @var mixed
     */
    private $tariffCode;

    /**
     * Variable exportDeclarationNumber
     *
     * @var mixed
     */
    private $exportDeclarationNumber;

    /**
     * Variable countryOfOrigin
     *
     * @var mixed
     */
    private $countryOfOrigin;

    /**
     * Variable coverAmount
     *
     * @var mixed
     */
    private $coverAmount;

    /**
     * Variable weight
     *
     * @var mixed
     */
    private $weight;

    /**
     * Variable description
     *
     * @var mixed
     */
    private $description;

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'tariff_code'               => $this->getTariffCode(),
            'export_declaration_number' => $this->getExportDeclarationNumber(),
            'country_of_origin'         => $this->getCountryOfOrigin(),
            'cover_amount'              => $this->getCoverAmount(),
            'weight'                    => $this->getWeight(),
            'description'               => $this->getDescription(),
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
        $this->setTariffCode(null);
        $this->setExportDeclarationNumber(null);
        $this->setCountryOfOrigin(null);
        $this->setCoverAmount(null);
        $this->setWeight(null);
        $this->setDescription(null);
    }

    /**
     * Function setTariffCode
     *
     * @param  mixed $tariffCode tariffCode.
     * @return string
     */
    public function setTariffCode($tariffCode)
    {
        $this->tariffCode = $tariffCode;
    }

    /**
     * Function getTariffCode
     *
     * @return string
     */
    public function getTariffCode()
    {
        return $this->tariffCode;
    }

    /**
     * Function setExportDeclarationNumber
     *
     * @param  mixed $exportDeclarationNumber exportDeclarationNumber.
     * @return void
     */
    public function setExportDeclarationNumber($exportDeclarationNumber)
    {
        $this->exportDeclarationNumber = $exportDeclarationNumber;
    }

    /**
     * Function getExportDeclarationNumber
     *
     * @return string
     */
    public function getExportDeclarationNumber()
    {
        return $this->exportDeclarationNumber;
    }

    /**
     * Function setCountryOfOrigin
     *
     * @param  mixed $countryOfOrigin countryOfOrigin.
     * @return void
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        $this->countryOfOrigin = $countryOfOrigin;
    }

    /**
     * Function getCountryOfOrigin
     *
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->countryOfOrigin;
    }

    /**
     * Function setCoverAmount
     *
     * @param  mixed $coverAmount coverAmount.
     * @return void
     */
    public function setCoverAmount($coverAmount)
    {
        $this->coverAmount = $coverAmount;
    }

    /**
     * Function getCoverAmount
     *
     * @return number
     */
    public function getCoverAmount()
    {
        return $this->coverAmount;
    }

    /**
     * Function setWeight
     *
     * @param  mixed $weight weight.
     * @return void
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * Function getWeight
     *
     * @return number
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Function setDescription
     *
     * @param  mixed $description description.
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Function getDescription
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
