<?php

/**
 *
 * Shipment Request File.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipment;

/**
 * CreateShipmentRequest class.
 */
class CreateShipmentRequest
{
    /**
     * Variable carrier
     *
     * @var mixed
     */
    private $carrierObject;

    /**
     * Variable shipment
     *
     * @var mixed
     */
    private $shipmentObject;

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
     * Function shipment Shipment.
     *
     * @return object
     */
    public function shipment()
    {
        if (empty($this->shipmentObject)) {
            require_once dirname(__FILE__) . '/Objects/Shipment.php';
            $this->shipmentObject = new Shipment();
        }
        return $this->shipmentObject;
    }

    /**
     * Function getRequest
     *
     * @return object
     */
    public function getRequest()
    {
        $obj = array(
            'carrier'  => $this->carrier()->getObject(),
            'shipment' => array(
                'ship_from'        => $this->shipment()->shipFrom()->getObject(),
                'ship_to'          => $this->shipment()->shipTo()->getObject(),
                'packages'         => $this->shipment()->items()->getItems(),
                'ship_date'        => $this->shipment()->getShipDate(),
                'shipment_options' => $this->shipment()->shipmentOptions()->getObject(),
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
     * @return object
     */
    public function getRequestJSON()
    {
        return json_encode($this->getRequest());
    }
}
