<?php

/**
 *
 * ShipmentOptions Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipmentsMyPost;

/**
 * ShipmentOptions class.
 */
class ShipmentOptions
{
    /**
     * Variable auspostMypostObject
     *
     * @var mixed
     */
    private $auspostMypostObject;

    /**
     * Function get_object Get Object.
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

    public function auspostMypost()
    {
        if (empty($this->auspostMypostObject)) {
            require_once dirname(__FILE__) . '/AuspostMypostShipmentOptions.php';
            $this->auspostMypostObject = new AuspostMypostShipmentOptions();
        }
        return $this->auspostMypostObject;
    }
}
