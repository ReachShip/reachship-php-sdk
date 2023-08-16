<?php

/**
 *
 * ItemOptions Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipmentsMyPost;

/**
 * ItemOptions class.
 */
class ItemOptions
{
    /**
     * Variable auspostMypostItemOptionsObject
     *
     * @var mixed
     */
    private $auspostMypostItemOptionsObject;

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'auspost_mypost' => $this->auspostMypost()->getObject(),
        );

        return $obj;
    }

    /**
     * Function auspostMypost
     *
     * @return void
     */
    public function auspostMypost()
    {
        if (empty($this->auspostMypostItemOptionsObject)) {
            require_once dirname(__FILE__) . '/AuspostMypostItemOptions.php';
            $this->auspostMypostItemOptionsObject = new AuspostMypostItemOptions();
        }
        return $this->auspostMypostItemOptionsObject;
    }
}
