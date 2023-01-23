<?php

/**
 *
 * AuspostMypostShipmentOptions Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipmentsMyPost;

/**
 * AuspostMypostShipmentOptions class.
 */
class AuspostMypostShipmentOptions
{
    /**
     * Variable shipmentReference
     *
     * @var mixed
     */
    private $shipmentReference = '';

    /**
     * Variable emailTrackingEnabled
     *
     * @var mixed
     */
    private $emailTrackingEnabled;

    /**
     * Variable senderReferences
     *
     * @var mixed
     */
    private $senderReferences = [];

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'shipment_reference' => $this->getShipmentReference(),
            'email_tracking_enabled' => $this->getEmailTrackingEnabled(),
            'sender_references' => $this->getSenderReferences()
        );

        return $obj;
    }

    /**
     * Function setSenderReferences
     *
     * @param  mixed $senderReferences senderReferences.
     * @return void
     */
    public function setSenderReferences($senderReferences)
    {
        $this->senderReferences = $senderReferences;
    }

    /**
     * Function getSenderReferences
     *
     * @return string
     */
    public function getSenderReferences()
    {
        return $this->senderReferences;
    }

    /**
     * Function setEmailTrackingEnabled
     *
     * @param  mixed $emailTrackingEnabled emailTrackingEnabled.
     * @return void
     */
    public function setEmailTrackingEnabled($emailTrackingEnabled)
    {
        $this->emailTrackingEnabled = $emailTrackingEnabled;
    }

    /**
     * Function getEmailTrackingEnabled
     *
     * @return string
     */
    public function getEmailTrackingEnabled()
    {
        return $this->emailTrackingEnabled;
    }

    /**
     * Function setShipmentReference
     *
     * @param  mixed $shipmentReference shipmentReference.
     * @return void
     */
    public function setShipmentReference($shipmentReference)
    {
        $this->shipmentReference = $shipmentReference;
    }

    /**
     * Function getShipmentReference
     *
     * @return string
     */
    public function getShipmentReference()
    {
        return $this->shipmentReference;
    }
}
