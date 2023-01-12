<?php

/**
 *
 * AuspostMypost Options Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateLabelMypost;

/**
 * AuspostMypost Options class.
 */
class AuspostMypostOptions
{
    /**
     * Variable name
     *
     * @var mixed
     */
    private $stepName = null;

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        return array(
            'step_name' => $this->getStepName(),
        );
    }

    /**
     * Function setStepName
     *
     * @param  mixed $stepName stepName.
     * @return void
     */
    public function setStepName($stepName)
    {
        $this->stepName = $stepName;
    }

    /**
     * Function getStepName
     *
     * @return string
     */
    public function getStepName()
    {
        return $this->stepName;
    }
}
