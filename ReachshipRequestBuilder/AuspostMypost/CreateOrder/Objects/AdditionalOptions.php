<?php

namespace Reachship\CreateOrderMypost;

/**
 *
 * AdditionalOptions Object.
 *
 * @package ReachShip Library
 */

use Reachship\CreateOrderMypost;

/**
 * AdditionalOptions class.
 */
class AdditionalOptions
{
    /**
     * Variable name
     *
     * @var mixed
     */
    private $auspostMypostObject = null;

    /**
     * Function get_object Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'auspost_mypost' => $this->auspostMypostObject->getObject(),
        );

        return $obj;
    }

    /**
     * Function auspost_mypost
     *
     * @return object
     */
    public function auspostMypost()
    {
        if (empty($this->auspostMypostObject)) {
            require_once dirname(__FILE__) . '/AuspostMypostOptions.php';
            $this->auspostMypostObject = new AuspostMypostOptions();
        }
        return $this->auspostMypostObject;
    }
}
