<?php

/**
 *
 * Carrier Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipmentsMyPost;

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
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'name' => $this->getName(),
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
}
