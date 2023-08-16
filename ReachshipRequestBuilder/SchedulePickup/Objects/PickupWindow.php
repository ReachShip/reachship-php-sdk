<?php

/**
 *
 * PickupWindow Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\SchedulePickup;

/**
 * PickupWindow class.
 */
class PickupWindow
{
    /**
     * Variable date
     *
     * @var mixed
     */
    private $date = '';

    /**
     * Variable readyTime
     *
     * @var mixed
     */
    private $readyTime = '';

    /**
     * Variable closeTime
     *
     * @var mixed
     */
    private $closeTime = '';

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'date'       => $this->getDate(),
            'ready_time' => $this->getReadyTime(),
            'close_time' => $this->getCloseTime(),
        );

        return $obj;
    }

    /**
     * Function setDate
     *
     * @param  mixed $date date.
     * @return void
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Function getDate
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Function setReadyTime
     *
     * @param  mixed $readyTime readyTime.
     * @return void
     */
    public function setReadyTime($readyTime)
    {
        $this->readyTime = $readyTime;
    }

    /**
     * Function getReadyTime
     *
     * @return string
     */
    public function getReadyTime()
    {
        return $this->readyTime;
    }

    /**
     * Function setCloseTime
     *
     * @param  mixed $closeTime closeTime.
     * @return void
     */
    public function setCloseTime($closeTime)
    {
        $this->closeTime = $closeTime;
    }

    /**
     * Function getCloseTime
     *
     * @return string
     */
    public function getCloseTime()
    {
        return $this->closeTime;
    }
}
