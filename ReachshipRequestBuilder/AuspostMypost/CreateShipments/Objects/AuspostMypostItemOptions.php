<?php

/**
 *
 * AuspostMypostItemOptions Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipmentsMyPost;

/**
 * AuspostMypostItemOptions class.
 */
class AuspostMypostItemOptions
{
    /**
     * Variable containsDangerousGoods
     *
     * @var mixed
     */
    private $containsDangerousGoods;

    /**
     * Variable importReferenceNumber
     *
     * @var mixed
     */
    private $importReferenceNumber;

    /**
     * Variable productId
     *
     * @var mixed
     */
    private $productId;

    /**
     * Variable signatureOnDelivery
     *
     * @var mixed
     */
    private $signatureOnDelivery;

    /**
     * Variable commercialValue
     *
     * @var mixed
     */
    private $commercialValue;

    /**
     * Variable classificationType
     *
     * @var mixed
     */
    private $classificationType;

    /**
     * Variable descriptionOfOther
     *
     * @var mixed
     */
    private $descriptionOfOther;

    /**
     * Variable itemContents
     *
     * @var mixed
     */
    private $itemContents = array();

    /**
     * Variable itemContentObject
     *
     * @var mixed
     */
    private $itemContentObject;

    /**
     * Function getObject Get Object.
     *
     * @return object
     */
    public function getObject()
    {
        $obj = array(
            'contains_dangerous_goods' => $this->getContainsDangerousGoods(),
            'import_reference_number'  => $this->getImportReferenceNumber(),
            'product_id'               => $this->getProductId(),
            'signature_on_delivery'    => $this->getSignatureOnDelivery(),
            'commercial_value'         => $this->getCommercialValue(),
            'classification_type'      => $this->getClassificationType(),
            'description_of_other'     => $this->getDescriptionOfOther(),
            'item_contents'            => $this->getItemContents(),
        );

        return $obj;
    }

    /**
     * Function clear Set Keys as NULL.
     *
     * @return object
     */
    public function clear()
    {
        $this->setContainsDangerousGoods(null);
        $this->setImportReferenceNumber(null);
        $this->setProductId(null);
        $this->setSignatureOnDelivery(null);
        $this->setCommercialValue(null);
        $this->setClassificationType(null);
        $this->setDescriptionOfOther(null);
        $this->itemContents = array();
    }

    /**
     * Function setContainsDangerousGoods
     *
     * @param  mixed $containsDangerousGoods containsDangerousGoods.
     * @return boolean
     */
    public function setContainsDangerousGoods($containsDangerousGoods)
    {
        $this->containsDangerousGoods = $containsDangerousGoods;
    }

    /**
     * Function getContainsDangerousGoods
     *
     * @return string
     */
    public function getContainsDangerousGoods()
    {
        return $this->containsDangerousGoods;
    }

    /**
     * Function setImportReferenceNumber
     *
     * @param  mixed $importReferenceNumber importReferenceNumber.
     * @return void
     */
    public function setImportReferenceNumber($importReferenceNumber)
    {
        $this->importReferenceNumber = $importReferenceNumber;
    }

    /**
     * Function getImportReferenceNumber
     *
     * @return string
     */
    public function getImportReferenceNumber()
    {
        return $this->importReferenceNumber;
    }

    /**
     * Function setProductId
     *
     * @param  mixed $productId productId.
     * @return void
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * Function getProductId
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Function setSignatureOnDelivery
     *
     * @param  mixed $signatureOnDelivery signatureOnDelivery.
     * @return void
     */
    public function setSignatureOnDelivery($signatureOnDelivery)
    {
        $this->signatureOnDelivery = $signatureOnDelivery;
    }

    /**
     * Function getSignatureOnDelivery
     *
     * @return boolean
     */
    public function getSignatureOnDelivery()
    {
        return $this->signatureOnDelivery;
    }

    /**
     * Function setCommercialValue
     *
     * @param  mixed $commercialValue commercialValue.
     * @return void
     */
    public function setCommercialValue($commercialValue)
    {
        $this->commercialValue = $commercialValue;
    }

    /**
     * Function getCommercialValue
     *
     * @return boolean
     */
    public function getCommercialValue()
    {
        return $this->commercialValue;
    }

    /**
     * Function setClassificationType
     *
     * @param  mixed $classificationType classificationType.
     * @return void
     */
    public function setClassificationType($classificationType)
    {
        $this->classificationType = $classificationType;
    }

    /**
     * Function getClassificationType
     *
     * @return string
     */
    public function getClassificationType()
    {
        return $this->classificationType;
    }

    /**
     * Function setDescriptionOfOther
     *
     * @param  mixed $descriptionOfOther descriptionOfOther.
     * @return void
     */
    public function setDescriptionOfOther($descriptionOfOther)
    {
        $this->descriptionOfOther = $descriptionOfOther;
    }

    /**
     * Function getDescriptionOfOther
     *
     * @return string
     */
    public function getDescriptionOfOther()
    {
        return $this->descriptionOfOther;
    }

    /**
     * Function getItemContents Get Item Contents.
     *
     * @return object
     */
    public function getItemContents()
    {
        return $this->itemContents;
    }

    /**
     * Function addItemContent
     *
     * @param  mixed $itemContent Item Content.
     * @return void
     */
    public function addItemContent($itemContent)
    {
        array_push($this->itemContents, $itemContent);
    }

    /**
     * Function itemContent
     *
     * @return object
     */
    public function itemContent()
    {
        if (empty($this->itemContentObject)) {
            require_once dirname(__FILE__) . '/AuspostMypostItemOptionsItemContent.php';
            $this->itemContentObject = new AuspostMypostItemOptionsItemContent();
        }
        return $this->itemContentObject;
    }
}
