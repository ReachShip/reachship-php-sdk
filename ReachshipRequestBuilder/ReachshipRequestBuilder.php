<?php

/**
 *
 * ReachshipRequestBuilder File.
 *
 * @package ReachShip Library
 */

use Reachship\Rates;
use Reachship\CreateShipment;
use Reachship\TrackShipment;
use Reachship\SchedulePickup;
use Reachship\DeleteShipments;
use Reachship\RecoverShipmentURL;
use Reachship\DeleteCarrierCredentials;

/**
 * ReachshipRequestBuilder class.
 */
class ReachshipRequestBuilder
{
    /**
     * Variable ratesObject
     *
     * @var mixed
     */
    private $ratesObject;

    /**
     * Variable createShipmentObject
     *
     * @var mixed
     */
    private $createShipmentObject;

    /**
     * Variable trackShipmentObject
     *
     * @var mixed
     */
    private $trackShipmentObject;

    /**
     * Variable deleteShipmentsObject
     *
     * @var mixed
     */
    private $deleteShipmentsObject;

    /**
     * Variable schedulePickupObject
     *
     * @var mixed
     */
    private $schedulePickupObject;

    /**
     * Variable auspostMypostObject
     *
     * @var mixed
     */
    private $auspostMypostObject;

    /**
     * Variable recoverShipmentURLObject
     *
     * @var mixed
     */
    private $recoverShipmentURLObject;

    /**
     * Variable deleteCarrierCredentialsObject
     *
     * @var mixed
     */
    private $deleteCarrierCredentialsObject;

    /**
     * Function rates
     *
     * @return object
     */
    public function rates()
    {
        if (empty($this->ratesObject)) {
            require_once dirname(__FILE__) . '/Rates/RatesRequest.php';
            $this->ratesObject = new Reachship\Rates\RatesRequest();
        }
        return $this->ratesObject;
    }

    /**
     * Function createShipment
     *
     * @return object
     */
    public function createShipment()
    {
        if (empty($this->createShipmentObject)) {
            require_once dirname(__FILE__) . '/CreateShipment/CreateShipmentRequest.php';
            $this->createShipmentObject = new Reachship\CreateShipment\CreateShipmentRequest();
        }
        return $this->createShipmentObject;
    }

    /**
     * Function trackShipment
     *
     * @return object
     */
    public function trackShipment()
    {
        if (empty($this->trackShipmentObject)) {
            require_once dirname(__FILE__) . '/TrackShipment/TrackShipmentRequest.php';
            $this->trackShipmentObject = new Reachship\TrackShipment\TrackShipmentRequest();
        }
        return $this->trackShipmentObject;
    }

    /**
     * Function deleteShipments
     *
     * @return object
     */
    public function deleteShipments()
    {
        if (empty($this->deleteShipmentsObject)) {
            require_once dirname(__FILE__) . '/DeleteShipments/DeleteShipmentsRequest.php';
            $this->deleteShipmentsObject = new Reachship\DeleteShipments\DeleteShipmentsRequest();
        }
        return $this->deleteShipmentsObject;
    }

    /**
     * Function schedulePickup
     *
     * @return object
     */
    public function schedulePickup()
    {
        if (empty($this->schedulePickupObject)) {
            require_once dirname(__FILE__) . '/SchedulePickup/SchedulePickupRequest.php';
            $this->schedulePickupObject = new SchedulePickupRequest();
        }
        return $this->schedulePickupObject;
    }

    /**
     * Function auspostMypost
     *
     * @return object
     */
    public function auspostMypost()
    {
        if (empty($this->auspostMypostObject)) {
            require_once dirname(__FILE__) . '/AuspostMypost/AuspostMypost.php';
            $this->auspostMypostObject = new AuspostMypost();
        }
        return $this->auspostMypostObject;
    }

    /**
     * Function recoverShipmentUrl
     *
     * @return object
     */
    public function recoverShipmentUrl()
    {
        if (empty($this->recoverShipmentURLObject)) {
            require_once dirname(__FILE__) . '/RecoverShipmentURL/RecoverShipmentURLRequest.php';
            $this->recoverShipmentURLObject = new RecoverShipmentURLRequest();
        }
        return $this->recoverShipmentURLObject;
    }

    /**
     * Function deleteCarrierCredentials
     *
     * @return object
     */
    public function deleteCarrierCredentials()
    {
        if (empty($this->deleteCarrierCredentialsObject)) {
            require_once dirname(__FILE__) . '/DeleteCarrierCredentials/DeleteCarrierCredentialsRequest.php';
            $this->deleteCarrierCredentialsObject = new DeleteCarrierCredentialsRequest();
        }
        return $this->deleteCarrierCredentialsObject;
    }
}
