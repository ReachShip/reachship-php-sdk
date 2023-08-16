<?php

/**
 *
 * Layouts Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateLabelMypost;

/**
 * Layouts class.
 */
class Layouts
{
    /**
     * Variable expressPostLayout
     *
     * @var mixed
     */
    private $expressPostLayout = '';

    /**
     * Variable parcelPostLayout
     *
     * @var mixed
     */
    private $parcelPostLayout = '';

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        return array(
            'express_post' => $this->getExpressPostLayout(),
            'parcel_post'  => $this->getParcelPostLayout(),
        );
    }

    /**
     * Function setExpressPostLayout
     *
     * @param  mixed $expressPostLayout expressPostLayout.
     * @return void
     */
    public function setExpressPostLayout($expressPostLayout)
    {
        $this->expressPostLayout = $expressPostLayout;
    }

    /**
     * Function getExpressPostLayout
     *
     * @return string
     */
    public function getExpressPostLayout()
    {
        return $this->expressPostLayout;
    }

    /**
     * Function setParcelPostLayout
     *
     * @param  mixed $parcelPostLayout parcelPostLayout.
     * @return void
     */
    public function setParcelPostLayout($parcelPostLayout)
    {
        $this->parcelPostLayout = $parcelPostLayout;
    }

    /**
     * Function getParcelPostLayout
     *
     * @return string
     */
    public function getParcelPostLayout()
    {
        return $this->parcelPostLayout;
    }
}
