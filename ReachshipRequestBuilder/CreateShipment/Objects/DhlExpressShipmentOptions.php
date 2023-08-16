<?php

/**
 *
 * DhlExpress Shipment Options Object.
 *
 * @package ReachShip Library
 */

namespace Reachship\CreateShipment;

/**
 * DhlExpressShipmentOptions class.
 */
class DhlExpressShipmentOptions
{
    /**
     * Variable globalProductCode
     *
     * @var mixed
     */
    private $globalProductCode = '';

    /**
     * Variable localProductCode
     *
     * @var mixed
     */
    private $localProductCode = '';

    /**
     * Variable currencyCode
     *
     * @var mixed
     */
    private $currencyCode = '';

    /**
     * Variable shipperContent
     *
     * @var mixed
     */
    private $shipperContent = '';

    /**
     * Variable regionCode
     *
     * @var mixed
     */
    private $regionCode = '';

    /**
     * Variable shippingPaymentType
     *
     * @var mixed
     */
    private $shippingPaymentType = '';

    /**
     * Variable billingAccountNumber
     *
     * @var mixed
     */
    private $billingAccountNumber = '';

    /**
     * Variable returnLabelAccountNumber
     *
     * @var mixed
     */
    private $returnLabelAccountNumber = '';

    /**
     * Variable generateDhlInvoice
     *
     * @var mixed
     */
    private $generateDhlInvoice = false;

    /**
     * Variable dhlInvoiceLanguageCode
     *
     * @var mixed
     */
    private $dhlInvoiceLanguageCode = '';

    /**
     * Variable exportReason
     *
     * @var mixed
     */
    private $exportReason = '';

    /**
     * Variable exportReasonCode
     *
     * @var mixed
     */
    private $exportReasonCode = '';

    /**
     * Variable dhlInvoiceType
     *
     * @var mixed
     */
    private $dhlInvoiceType = '';

    /**
     * Variable exporterId
     *
     * @var mixed
     */
    private $exporterId = '';

    /**
     * Variable exporterCode
     *
     * @var mixed
     */
    private $exporterCode = '';

    /**
     * Variable invoiceNumber
     *
     * @var mixed
     */
    private $invoiceNumber;

    /**
     * Variable freightCost
     *
     * @var mixed
     */
    private $freightCost;

    /**
     * Variable insuranceCost
     *
     * @var mixed
     */
    private $insuranceCost = '';

    /**
     * Variable vatNumber
     *
     * @var mixed
     */
    private $vatNumber = '';

    /**
     * Variable vatNumberIssuerCountryCode
     *
     * @var mixed
     */
    private $vatNumberIssuerCountryCode = '';

    /**
     * Variable emailNotification
     *
     * @var mixed
     */
    private $emailNotification = '';

    /**
     * Variable trackingMessageToEmail
     *
     * @var mixed
     */
    private $trackingMessageToEmail = '';

    /**
     * Variable paperlessTrade
     *
     * @var mixed
     */
    private $paperlessTrade;

    /**
     * Variable saturdayDelivery
     *
     * @var mixed
     */
    private $saturdayDelivery;

    /**
     * Variable requestArchiveDoc
     *
     * @var mixed
     */
    private $requestArchiveDoc = '';

    /**
     * Variable numberOfArchiveDoc
     *
     * @var mixed
     */
    private $numberOfArchiveDoc = '';

    /**
     * Variable logoImage
     *
     * @var mixed
     */
    private $logoImage = '';

    /**
     * Variable labelSize
     *
     * @var mixed
     */
    private $labelSize = '';
 
    /**
     * Variable companyLogoImageId
     *
     * @var string
     */
    private $companyLogoImageId = '';

    /**
     * Variable signatureImageId
     *
     * @var string
     */
    private $signatureImageId = '';

    /**
     * Variable isReturnLabel
     *
     * @var mixed
     */
    private $isReturnLabel = '';

    /**
     * Variable createInvoice
     *
     * @var mixed
     */
    private $createInvoice = '';

    /**
     * Variable totalInsuredValue
     *
     * @var mixed
     */
    private $totalInsuredValue = null;

    /**
     * Variable signature
     *
     * @var mixed
     */
    private $signature = null;

    /**
     * Variable dutiable
     *
     * @var mixed
     */
    private $dutiable = null;
    
    /**
     * Variable otherSpecialServices
     *
     * @var array
     */
    private $otherSpecialServices = array();

    /**
     * Function getObject Get Object.
     *
     * @return array
     */
    public function getObject()
    {
        return array(
            'return_label_account_number'      => $this->getReturnLabelAccountNumber(),
            'currency_code'                    => $this->getCurrencyCode(),
            'shipper_content'                  => $this->getShipperContent(),
            'region_code'                      => $this->getRegionCode(),
            'shipping_payment_type'            => $this->getShippingPaymentType(),
            'billing_account_number'           => $this->getBillingAccountNumber(),
            'generate_dhl_invoice'             => $this->getGenerateDhlInvoice(),
            'dhl_invoice_language_code'        => $this->getDhlInvoiceLanguageCode(),
            'export_reason'                    => $this->getExportReason(),
            'export_reason_code'               => $this->getExportReasonCode(),
            'dhl_invoice_type'                 => $this->getDhlInvoiceType(),
            'exporter_id'                      => $this->getExporterId(),
            'exporter_code'                    => $this->getExporterCode(),
            'invoice_number'                   => $this->getInvoiceNumber(),
            'freight_cost'                     => $this->getFreightCost(),
            'insurance_cost'                   => $this->getInsuranceCost(),
            'vat_number'                       => $this->getVatNumber(),
            'vat_number_issuer_country_code'   => $this->getVatNumberIssuerCountryCode(),
            'email_notification'               => $this->getEmailNotification(),
            'tracking_message_to_email'        => $this->getTrackingMessageToEmail(),
            'paperless_trade'                  => $this->getPaperlessTrade(),
            'request_archive_doc'              => $this->getRequestArchiveDoc(),
            'number_of_archive_doc'            => $this->getNumberOfArchiveDoc(),
            'company_logo_image_id'            => $this->getCompanyLogoImageId(),
            'signature_image_id'               => $this->getSignatureImageId(),
            'label_size'                       => $this->getLabelSize(),
            'is_return_label'                  => $this->getIsReturnLabel(),
            'create_invoice'                   => $this->getCreateInvoice(),
            'total_insured_value'              => $this->totalInsuredValue()->getObject(),
            'signature'                        => $this->signature()->getObject(),
            'dutiable'                         => $this->dutiable()->getObject(),
            'other_special_services'           => $this->getOtherSpecialServices(),
        );
    }

    /**
     * Function getCurrencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Function setCurrencyCode
     *
     * @param  mixed $currencyCode
     * @return void
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * Function getShipperContent
     *
     * @return string
     */
    public function getShipperContent()
    {
        return $this->shipperContent;
    }

    /**
     * Function setShipperContent
     *
     * @param  mixed $shipperContent
     * @return void
     */
    public function setShipperContent($shipperContent)
    {
        $this->shipperContent = $shipperContent;
    }

    /**
     * Function getRegionCode
     *
     * @return string
     */
    public function getRegionCode()
    {
        return $this->regionCode;
    }

    /**
     * Function setRegionCode
     *
     * @param  mixed $regionCode
     * @return void
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;
    }

    /**
     * Function getShippingPaymentType
     *
     * @return string
     */
    public function getShippingPaymentType()
    {
        return $this->shippingPaymentType;
    }

    /**
     * Function setShippingPaymentType
     *
     * @param  mixed $shippingPaymentType
     * @return void
     */
    public function setShippingPaymentType($shippingPaymentType)
    {
        $this->shippingPaymentType = $shippingPaymentType;
    }

    /**
     * Function getReturnLabelAccountNumber
     *
     * @return string
     */
    public function getReturnLabelAccountNumber()
    {
        return $this->returnLabelAccountNumber;
    }

    /**
     * Function setReturnLabelAccountNumber
     *
     * @param  mixed $returnLabelAccountNumber
     * @return void
     */
    public function setReturnLabelAccountNumber($returnLabelAccountNumber)
    {
        $this->returnLabelAccountNumber = $returnLabelAccountNumber;
    }

    /**
     * Function getBillingAccountNumber
     *
     * @return string
     */
    public function getBillingAccountNumber()
    {
        return $this->billingAccountNumber;
    }

    /**
     * Function setBillingAccountNumber
     *
     * @param  mixed $billingAccountNumber
     * @return void
     */
    public function setBillingAccountNumber($billingAccountNumber)
    {
        $this->billingAccountNumber = $billingAccountNumber;
    }

    /**
     * Function getGenerateDhlInvoice
     *
     * @return string
     */
    public function getGenerateDhlInvoice()
    {
        return $this->generateDhlInvoice;
    }

    /**
     * Function setGenerateDhlInvoice
     *
     * @param  mixed $generateDhlInvoice
     * @return void
     */
    public function setGenerateDhlInvoice($generateDhlInvoice)
    {
        $this->generateDhlInvoice = $generateDhlInvoice;
    }

    /**
     * Function getDhlInvoiceLanguageCode
     *
     * @return string
     */    
    public function getDhlInvoiceLanguageCode()
    {
        return $this->dhlInvoiceLanguageCode;
    }

    /**
     * Function setDhlInvoiceLanguageCode
     *
     * @param  mixed $dhlInvoiceLanguageCode
     * @return void
     */
    public function setDhlInvoiceLanguageCode($dhlInvoiceLanguageCode)
    {
        $this->dhlInvoiceLanguageCode = $dhlInvoiceLanguageCode;
    }

    /**
     * Function getExportReason
     *
     * @return string
     */
    public function getExportReason()
    {
        return $this->exportReason;
    }

    /**
     * Function setExportReason
     *
     * @param  mixed $exportReason
     * @return void
     */
    public function setExportReason($exportReason)
    {
        $this->exportReason = $exportReason;
    }

    /**
     * Function getExportReasonCode
     *
     * @return string
     */
    public function getExportReasonCode()
    {
        return $this->exportReasonCode;
    }

    /**
     * Function setExportReasonCode
     *
     * @param  mixed $exportReasonCode
     * @return void
     */
    public function setExportReasonCode($exportReasonCode)
    {
        $this->exportReasonCode = $exportReasonCode;
    }

    /**
     * Function getDhlInvoiceType
     *
     * @return string
     */
    public function getDhlInvoiceType()
    {
        return $this->dhlInvoiceType;
    }

    /**
     * Function setDhlInvoiceType
     *
     * @param  string $dhlInvoiceType
     * @return void
     */
    public function setDhlInvoiceType($dhlInvoiceType)
    {
        $this->dhlInvoiceType = $dhlInvoiceType;
    }

    /**
     * Function getExporterId
     *
     * @return string
     */
    public function getExporterId()
    {
        return $this->exporterId;
    }

    /**
     * Function setExporterId
     *
     * @param  string $exporterId
     * @return void
     */
    public function setExporterId($exporterId)
    {
        $this->exporterId = $exporterId;
    }



    /**
     * Function getExporterCode
     *
     * @return string
     */
    public function getExporterCode()
    {
        return $this->exporterCode;
    }

    /**
     * Function setExporterCode
     *
     * @param  string $exporterCode
     * @return void
     */
    public function setExporterCode($exporterCode)
    {
        $this->exporterCode = $exporterCode;
    }

    /**
     * Function getInvoiceNumber
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Function setInvoiceNumber
     *
     * @param  string $invoiceNumber
     * @return void
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;
    }

    /**
     * Function getFreightCost
     *
     * @return bool
     */
    public function getFreightCost()
    {
        return $this->freightCost;
    }

    /**
     * Function setFreightCost
     *
     * @param  bool $freightCost
     * @return void
     */
    public function setFreightCost($freightCost)
    {
        $this->freightCost = $freightCost;
    }

    /**
     * Function getInsuranceCost
     *
     * @return bool
     */
    public function getInsuranceCost()
    {
        return $this->insuranceCost;
    }

    /**
     * Function setInsuranceCost
     *
     * @param  bool $insuranceCost
     * @return void
     */
    public function setInsuranceCost($insuranceCost)
    {
        $this->insuranceCost = $insuranceCost;
    }

    /**
     * Function getVatNumber
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    /**
     * Function setVatNumber
     *
     * @param  mixed $vatNumber
     * @return void
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
    }

    /**
     * Function getVatNumberIssuerCountryCode
     *
     * @return string
     */
    public function getVatNumberIssuerCountryCode()
    {
        return $this->vatNumberIssuerCountryCode;
    }

    /**
     * Function setVatNumberIssuerCountryCode
     *
     * @param  string $vatNumberIssuerCountryCode
     * @return void
     */
    public function setVatNumberIssuerCountryCode($vatNumberIssuerCountryCode)
    {
        $this->vatNumberIssuerCountryCode = $vatNumberIssuerCountryCode;
    }

    /**
     * Function getEmailNotification
     *
     * @return bool
     */
    public function getEmailNotification()
    {
        return $this->emailNotification;
    }

    /**
     * Function setEmailNotification
     *
     * @param  bool $emailNotification
     * @return void
     */
    public function setEmailNotification($emailNotification)
    {
        $this->emailNotification = $emailNotification;
    }

    /**
     * Function getTrackingMessageToEmail
     *
     * @return string
     */
    public function getTrackingMessageToEmail()
    {
        return $this->trackingMessageToEmail;
    }

    /**
     * Function setTrackingMessageToEmail
     *
     * @param  string $trackingMessageToEmail
     * @return void
     */
    public function setTrackingMessageToEmail($trackingMessageToEmail)
    {
        $this->trackingMessageToEmail = $trackingMessageToEmail;
    }

    /**
     * Function getPaperlessTrade
     *
     * @return bool
     */
    public function getPaperlessTrade()
    {
        return $this->paperlessTrade;
    }

    /**
     * Function setPaperlessTrade
     *
     * @param  bool $paperlessTrade
     * @return void
     */
    public function setPaperlessTrade($paperlessTrade)
    {
        $this->paperlessTrade = $paperlessTrade;
    }

    /**
     * Function getSaturdayDelivery
     *
     * @return bool
     */
    public function getSaturdayDelivery()
    {
        return $this->saturdayDelivery;
    }

    /**
     * Function setSaturdayDelivery
     *
     * @param  bool $saturdayDelivery
     * @return void
     */
    public function setSaturdayDelivery($saturdayDelivery)
    {
        $this->saturdayDelivery = $saturdayDelivery;
    }

    /**
     * Function getRequestArchiveDoc
     *
     * @return bool
     */
    public function getRequestArchiveDoc()
    {
        return $this->requestArchiveDoc;
    }

    /**
     * Function setRequestArchiveDoc
     *
     * @param  bool $requestArchiveDoc
     * @return void
     */
    public function setRequestArchiveDoc($requestArchiveDoc)
    {
        $this->requestArchiveDoc = $requestArchiveDoc;
    }

    /**
     * Function getNumberOfArchiveDoc
     *
     * @return mixed
     */
    public function getNumberOfArchiveDoc()
    {
        return $this->numberOfArchiveDoc;
    }

    /**
     * Function setNumberOfArchiveDoc
     *
     * @param  mixed $numberOfArchiveDoc
     * @return void
     */
    public function setNumberOfArchiveDoc($numberOfArchiveDoc)
    {
        $this->numberOfArchiveDoc = $numberOfArchiveDoc;
    }

    /**
     * Function getCompanyLogoImageId
     *
     * @return string
     */
    public function getCompanyLogoImageId()
    {
        return $this->companyLogoImageId;
    }

    /**
     * Function setCompanyLogoImageId
     *
     * @param  string $companyLogoImageId
     * @return void
     */
    public function setCompanyLogoImageId($companyLogoImageId)
    {
        $this->companyLogoImageId = $companyLogoImageId;
    }

    /**
     * Function getSignatureImageId
     *
     * @return string
     */
    public function getSignatureImageId()
    {
        return $this->signatureImageId;
    }

    /**
     * Function setSignatureImageId
     *
     * @param  string $signatureImageId
     * @return void
     */
    public function setSignatureImageId($signatureImageId)
    {
        $this->signatureImageId = $signatureImageId;
    }

    /**
     * Function getLabelSize
     *
     * @return string
     */
    public function getLabelSize()
    {
        return $this->labelSize;
    }

    /**
     * Function setLabelSize
     *
     * @param  string $labelSize
     * @return void
     */
    public function setLabelSize($labelSize)
    {
        $this->labelSize = $labelSize;
    }

    /**
     * Function getIsReturnLabel
     *
     * @return bool
     */
    public function getIsReturnLabel()
    {
        return $this->isReturnLabel;
    }

    /**
     * Function setIsReturnLabel
     *
     * @param  bool $isReturnLabel
     * @return void
     */
    public function setIsReturnLabel($isReturnLabel)
    {
        $this->isReturnLabel = $isReturnLabel;
    }

    /**
     * Function getCreateInvoice
     *
     * @return bool
     */
    public function getCreateInvoice()
    {
        return $this->createInvoice;
    }

    /**
     * Function setCreateInvoice
     *
     * @param  bool $createInvoice
     * @return void
     */
    public function setCreateInvoice($createInvoice)
    {
        $this->createInvoice = $createInvoice;
    }

    /**
     * Function totalInsuredValue TotalInsuredValue.
     *
     * @return object
     */
    public function totalInsuredValue()
    {
        if (empty($this->totalInsuredValue)) {
            require_once dirname(__FILE__) . '/DhlExpressShipmentOptionsTotalInsuredValueObject.php';
            $this->totalInsuredValue = new DhlExpressShipmentOptionsTotalInsuredValueObject();
        }
        return $this->totalInsuredValue;
    }

    /**
     * Function signature Signature.
     *
     * @return object
     */
    public function signature()
    {
        if (empty($this->signature)) {
            require_once dirname(__FILE__) . '/DhlExpressShipmentOptionsSignatureObject.php';
            $this->signature = new DhlExpressShipmentOptionsSignatureObject();
        }
        return $this->signature;
    }

    /**
     * Function dutiable Dutiable.
     *
     * @return object
     */
    public function dutiable()
    {
        if (empty($this->dutiable)) {
            require_once dirname(__FILE__) . '/DhlExpressShipmentOptionsDutiableObject.php';
            $this->dutiable = new DhlExpressShipmentOptionsDutiableObject();
        }
        return $this->dutiable;
    }

    /**
     * Function getOtherSpecialServices
     *
     * @return array
     */
    public function getOtherSpecialServices()
    {
        return $this->otherSpecialServices;
    }

    /**
     * Function setOtherSpecialServices
     *
     * @param  array $otherSpecialServices
     * @return void
     */
    public function setOtherSpecialServices($otherSpecialServices)
    {
        $this->otherSpecialServices = $otherSpecialServices;
    }
}
