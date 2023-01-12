<?php

/**
 *
 * Carrier Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateLabelMypost;

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
        return array(
            'name' => $this->getName(),
        );
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
