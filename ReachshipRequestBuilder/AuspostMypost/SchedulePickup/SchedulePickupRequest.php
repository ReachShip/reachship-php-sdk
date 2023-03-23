<?php

/**
 *
 * Schedule Pickup Request Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\SchedulePickupMypost;

use Reachship\SchedulePickupMypost;

/**
 * SchedulePickupRequest class.
 */
class SchedulePickupRequest
{
    /**
     * Variable carrier
     *
     * @var mixed
     */
    private $carrierObject;

    /**
     * Variable auspostMypostCreatePickupObject
     *
     * @var mixed
     */
    private $auspostMypostCreatePickupObject;

    /**
     * Function carrier Carrier.
     *
     * @return object
     */
    public function carrier()
    {
        if (empty($this->carrierObject)) {
            require_once dirname(__FILE__) . '/Objects/Carrier.php';
            $this->carrierObject = new Carrier();
        }
        return $this->carrierObject;
    }

    /**
     * Function auspostMypostCreatePickup auspostMypostCreatePickup.
     *
     * @return object
     */
    public function auspostMypostCreatePickup()
    {
        if (empty($this->auspostMypostCreatePickupObject)) {
            require_once dirname(__FILE__) . '/Objects/AuspostMypostCreatePickup.php';
            $this->auspostMypostCreatePickupObject = new AuspostMypostCreatePickup();
        }
        return $this->auspostMypostCreatePickupObject;
    }

    /**
     * Function getRequest
     *
     * @return object
     */
    public function getRequest()
    {
        $obj = array(
            'carrier'                      => $this->carrier()->getObject(),
            'auspost_mypost_create_pickup' => $this->auspostMypostCreatePickup()->getObject(),
        );

        $obj = $this->mapDeepAndStripEmptyValues($obj, 'array_filter');

        return $obj;
    }

    /**
     * Function mapDeepAndStripEmptyValues.
     *
     * @param  mixed $value Value
     * @param  mixed $callback Callback
     * @return array
     */
    public function mapDeepAndStripEmptyValues($value, $callback)
    {
        if (is_array($value)) {
            foreach ($value as $index => $item) {
                if (empty($item) && !is_bool($item)) {
                    unset($value[$index]);
                    //  If numeric index, reindex and return.
                    if (is_numeric($index)) {
                        return array_values($value);
                    }
                } elseif (is_array($item)) {
                    $value[$index] = $this->mapDeepAndStripEmptyValues($item, $callback);
                    if (empty($value[$index]) && !is_bool($value[$index])) {
                        unset($value[$index]);
                        //  If numeric index, reindex and return.
                        if (is_numeric($index)) {
                            return array_values($value);
                        }
                    }
                }
            }
        }

        return $value;
    }

    /**
     * Function getRequestJSON
     *
     * @return object
     */
    public function getRequestJSON()
    {
        return json_encode($this->getRequest());
    }
}
