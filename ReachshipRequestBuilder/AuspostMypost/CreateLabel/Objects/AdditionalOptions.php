<?php

/**
 *
 * AdditionalOptions Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateLabelMypost;

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
        return array(
            'auspost_mypost' => $this->auspostMypost()->getObject(),
        );
    }

    /**
     * Function auspostMypost
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
