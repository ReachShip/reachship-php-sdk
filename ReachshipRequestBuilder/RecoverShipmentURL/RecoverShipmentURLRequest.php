<?php

/**
 *
 * Recover Shipment URL File.
 *
 * @package ReachShip Library
 */

use Reachship\SchedulePickup;

/**
 * RecoverShipmentURLRequest class.
 */
class RecoverShipmentURLRequest
{
    /**
     * Variable url
     *
     * @var mixed
     */
    private $url;

    /**
     * Function setUrl
     *
     * @param  mixed $url URL.
     * @return void
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Function getUrl
     *
     * @return string
     */
    public function getUrl()
    {
        return preg_replace('/\\\\/', '', $this->url);
    }

    /**
     * Function getRequest
     *
     * @return object
     */
    public function getRequest()
    {
        $obj = array(
            'url' => $this->getUrl(),
        );

        $obj = $this->mapDeepAndStripEmptyValues($obj, 'array_filter');

        return $obj;
    }

    public function mapDeepAndStripEmptyValues($value, $callback)
    {
        if (is_array($value)) {
            foreach ($value as $index => $item) {
                if (empty($item)) {
                    unset($value[$index]);
                    //  If numeric index, reindex and return.
                    if (is_numeric($index)) {
                        return array_values($value);
                    }
                } elseif (is_array($item)) {
                    $value[$index] = $this->mapDeepAndStripEmptyValues($item, $callback);
                    if (empty($value[$index])) {
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
     * @return array
     */
    public function getRequestJSON()
    {
        return json_encode($this->getRequest(), JSON_UNESCAPED_SLASHES);
    }
}
