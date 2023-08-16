<?php

/**
 *
 * Item Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipment;

/**
 * Item class.
 */
class Item
{
    /**
     * Variable weight
     *
     * @var mixed
     */
    private $weight;


    /**
     * Variable weightUnit
     *
     * @var mixed
     */
    private $weightUnit;


    /**
     * Variable length
     *
     * @var mixed
     */
    private $length;

    /**
     * Variable width
     *
     * @var mixed
     */
    private $width;

    /**
     * Variable height
     *
     * @var mixed
     */
    private $height;

    /**
     * Variable dimensionUnit
     *
     * @var mixed
     */
    private $dimensionUnit;

    /**
     * Variable itemOptionsObject
     *
     * @var mixed
     */
    private $itemOptionsObject;

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'length'       => array(
                'value' => $this->getLength(),
                'unit'  => $this->getDimensionUnit(),
            ),
            'width'        => array(
                'value' => $this->getWidth(),
                'unit'  => $this->getDimensionUnit(),
            ),
            'height'       => array(
                'value' => $this->getHeight(),
                'unit'  => $this->getDimensionUnit(),
            ),
            'weight'       => array(
                'value' => $this->getWeight(),
                'unit'  => $this->getWeightUnit(),
            ),
            'item_options' => $this->itemOptions()->getObject(),
        );

        return $obj;
    }

    /**
     * Function setLength
     *
     * @param  mixed $length Length.
     * @return void
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * Function getLength
     *
     * @return string
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Function setWidth
     *
     * @param  mixed $width Width.
     * @return void
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * Function getWidth
     *
     * @return string
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Function setHeight
     *
     * @param  mixed $height Param.
     * @return void
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * Function getHeight
     *
     * @return string
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Function setDimensionUnit
     *
     * @param  mixed $dimensionUnit Dimension Unit.
     * @return void
     */
    public function setDimensionUnit($dimensionUnit)
    {
        $this->dimensionUnit = $dimensionUnit;
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
     * Function setWeight
     *
     * @param  mixed $weight Param.
     * @return void
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * Function getWeight
     *
     * @return string
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Function setWeightUnit
     *
     * @param  mixed $weightUnit Weight Unit.
     * @return void
     */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;
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
     * Function itemOptions
     *
     * @return object
     */
    public function itemOptions()
    {
        if (empty($this->itemOptionsObject)) {
            require_once dirname(__FILE__) . '/ItemOptions.php';
            $this->itemOptionsObject = new ItemOptions();
        }
        return $this->itemOptionsObject;
    }
}
