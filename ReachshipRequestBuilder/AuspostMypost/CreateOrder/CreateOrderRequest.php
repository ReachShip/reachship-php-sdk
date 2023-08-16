<?php

/**
 *
 * Create Order File.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateOrderMypost;

use Reachship\CreateOrderMypost;

/**
 * CreateOrderRequest class.
 */
class CreateOrderRequest
{
    /**
     * Variable carrierObject
     *
     * @var mixed
     */
    private $carrierObject;

    /**
     * Variable additionalOptionsObject
     *
     * @var mixed
     */
    private $additionalOptionsObject;

    /**
     * Variable orderObject
     *
     * @var mixed
     */
    private $orderObject;

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
     * Function additionalOptions additionalOptions.
     *
     * @return object
     */
    public function additionalOptions()
    {
        if (empty($this->additionalOptionsObject)) {
            require_once dirname(__FILE__) . '/Objects/AdditionalOptions.php';
            $this->additionalOptionsObject = new AdditionalOptions();
        }
        return $this->additionalOptionsObject;
    }

    /**
     * Function order order.
     *
     * @return object
     */
    public function order()
    {
        if (empty($this->orderObject)) {
            require_once dirname(__FILE__) . '/Objects/Order.php';
            $this->orderObject = new Order();
        }
        return $this->orderObject;
    }

    /**
     * Function getRequest
     *
     * @return object
     */
    public function getRequest()
    {
        $obj = array(
            'carrier'            => $this->carrier()->getObject(),
            'additional_options' => $this->additionalOptions()->getObject(),
            'order'              => $this->order()->getObject(),
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
                if (empty($item) && ! is_bool($item)) {
                    unset($value[ $index ]);
                    // If numeric index, reindex and return.
                    if (is_numeric($index)) {
                        return array_values($value);
                    }
                } elseif (is_array($item)) {
                    $value[ $index ] = $this->mapDeepAndStripEmptyValues($item, $callback);
                    if (empty($value[ $index ]) && ! is_bool($value[ $index ])) {
                        unset($value[ $index ]);
                        // If numeric index, reindex and return.
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
        return json_encode($this->getRequest());
    }
}
