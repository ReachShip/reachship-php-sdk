<?php

/**
 *
 * Rates Request File.
 *
 * @package ReachShip Library
 */

namespace Reachship\Rates;

use Reachship\Rates;

/**
 * RatesRequest class.
 */
class RatesRequest
{
    /**
     * Variable shipFromObject
     *
     * @var mixed
     */
    private $shipFromObject;

    /**
     * Variable shipToObject
     *
     * @var mixed
     */
    private $shipToObject;

    /**
     * Variable itemsObject
     *
     * @var mixed
     */
    private $itemsObject;

    /**
     * Variable itemObject
     *
     * @var mixed
     */
    private $itemObject;

    /**
     * Variable ratesOptionsObject
     *
     * @var mixed
     */
    private $ratesOptionsObject;

    /**
     * Function shipFrom Ship From.
     *
     * @return object
     */
    public function shipFrom()
    {
        if (empty($this->shipFromObject)) {
            require_once dirname(__FILE__) . '/Objects/From.php';
            $this->shipFromObject = new From();
        }
        return $this->shipFromObject;
    }

    /**
     * Function shipTo Ship To.
     *
     * @return object
     */
    public function shipTo()
    {
        if (empty($this->shipToObject)) {
            require_once dirname(__FILE__) . '/Objects/To.php';
            $this->shipToObject = new To();
        }
        return $this->shipToObject;
    }

    /**
     * Function items Items.
     *
     * @return object
     */
    public function items()
    {
        if (empty($this->itemsObject)) {
            require_once dirname(__FILE__) . '/Objects/Items.php';
            $this->itemsObject = new Items();
        }
        return $this->itemsObject;
    }

    /**
     * Function item Item.
     *
     * @return object
     */
    public function item()
    {
        if (empty($this->itemObject)) {
            require_once dirname(__FILE__) . '/Objects/Item.php';
            $this->itemObject = new Item();
        }
        return $this->itemObject;
    }

    /**
     * Function ratesOptions Rates Options.
     *
     * @return object
     */
    public function ratesOptions()
    {
        if (empty($this->ratesOptionsObject)) {
            require_once dirname(__FILE__) . '/Objects/RatesOptions.php';
            $this->ratesOptionsObject = new RatesOptions();
        }
        return $this->ratesOptionsObject;
    }

    /**
     * Function clear Set Keys as NULL.
     *
     * @return object
     */
    public function clear()
    {
        $this->shipFromObject = null;
        $this->shipToObject = null;
        $this->itemsObject = null;
        $this->itemObject = null;
        $this->ratesOptionsObject = null;
    }

    /**
     * Function getRequest
     *
     * @return object
     */
    public function getRequest()
    {
        $obj = array(
            'rates_options' => $this->ratesOptions()->getObject(),
            'shipment'      => array(
                'ship_from' => $this->shipFrom()->getObject(),
                'ship_to'   => $this->shipTo()->getObject(),
                'packages'  => $this->items()->getItems(),
            ),
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
     * @return array
     */
    public function getRequestJSON()
    {
        return json_encode($this->getRequest(), JSON_PRETTY_PRINT);
    }
}
