<?php

/**
 *
 * Shipment Request File.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipmentsMyPost;

/**
 * CreateShipmentsRequest class.
 */
class CreateShipmentsRequest
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
     * Variable shipmentObject
     *
     * @var mixed
     */
    private $shipmentObject;

    /**
     * Variable shipments
     *
     * @var mixed
     */
    private $shipments = array();

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
     * Function shipment shipment.
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
     * Function addShipment addShipment.
     *
     * @return object
     */
    public function addShipment( $shipment )
    {
        array_push( $this->shipments, $shipment );
    }

    /**
     * Function getShipments getShipments.
     *
     * @return object
     */
    public function getShipments()
    {
        return $this->shipments;
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
            'shipments'          => $this->getShipments()
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
        return json_encode($this->getRequest(), JSON_PRETTY_PRINT);
    }
}
