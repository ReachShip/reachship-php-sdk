<?php

/**
 *
 * Label Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateLabelMypost;

/**
 * Label class.
 */
class Label
{
    /**
     * Variable includeAustraliapostBranding
     *
     * @var mixed
     */
    private $includeAustraliapostBranding = false;

    /**
     * Variable shipmentIds
     *
     * @var mixed
     */
    private $shipmentIds = array();

    /**
     * Variable layoutsObject
     *
     * @var mixed
     */
    private $layoutsObject = array();

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        return array(
            'include_australiapost_branding' => $this->getIncludeAustraliapostBranding(),
            'layouts' => $this->layouts()->getObject(),
            'shipment_ids' => $this->getShipmentIds()
        );
    }

    /**
     * Function layouts layouts.
     *
     * @return object
     */
    public function layouts()
    {
        if (empty($this->layoutsObject)) {
            require_once dirname(__FILE__) . '/Layouts.php';
            $this->layoutsObject = new Layouts();
        }
        return $this->layoutsObject;
    }

    /**
     * Function setIncludeAustraliapostBranding
     *
     * @param  mixed $includeAustraliapostBranding includeAustraliapostBranding.
     * @return void
     */
    public function setIncludeAustraliapostBranding($includeAustraliapostBranding)
    {
        $this->includeAustraliapostBranding = $includeAustraliapostBranding;
    }

    /**
     * Function getIncludeAustraliapostBranding
     *
     * @return string
     */
    public function getIncludeAustraliapostBranding()
    {
        return $this->includeAustraliapostBranding;
    }

    /**
     * Function setShipmentIds
     *
     * @param  mixed $shipmentIds shipmentIds.
     * @return void
     */
    public function setShipmentIds($shipmentIds)
    {
        $this->shipmentIds = $shipmentIds;
    }

    /**
     * Function getShipmentIds
     *
     * @return string
     */
    public function getShipmentIds()
    {
        return $this->shipmentIds;
    }
}
