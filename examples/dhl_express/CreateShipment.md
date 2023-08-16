# DHL_EXPRESS Create Shipment Full Schema

```php
<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

// Create Request Builder Instance.
$builder = new ReachshipRequestBuilder();
$request = $builder->createShipment();

// Carrier Object.
$request->carrier()->setName("DHL_EXPRESS");
$request->carrier()->setServiceCode("N");
$request->carrier()->setAccountName("DHLExpressAccount1");

// From Object.
$request->shipment()->shipFrom()->setName("Bob");
$request->shipment()->shipFrom()->setBusinessName("Bob");
$request->shipment()->shipFrom()->setEmail("bob@gmail.com");
$request->shipment()->shipFrom()->setPhone("9090909090", "");
$request->shipment()->shipFrom()->setAddressLine1("5501 N");
$request->shipment()->shipFrom()->setAddressLine2("Portland Ave");
$request->shipment()->shipFrom()->setCityLocality("Oklahoma City");
$request->shipment()->shipFrom()->setStateProvince("OK");
$request->shipment()->shipFrom()->setPostalCode("73112");
$request->shipment()->shipFrom()->setCountryCode("US");

// To Object.
$request->shipment()->shipTo()->setName("Bob");
$request->shipment()->shipTo()->setBusinessName("Elula Tech Pvt Lmt");
$request->shipment()->shipTo()->setEmail("bob@gmail.com");
$request->shipment()->shipTo()->setPhone("9090909090", "");
$request->shipment()->shipTo()->setAddressLine1("5501 N");
$request->shipment()->shipTo()->setAddressLine2("Portland Ave");
$request->shipment()->shipTo()->setCityLocality("Oklahoma City");
$request->shipment()->shipTo()->setStateProvince("OK");
$request->shipment()->shipTo()->setPostalCode("73112");
$request->shipment()->shipTo()->setCountryCode("US");

// Items.
$request->shipment()->item()->setLength(1);
$request->shipment()->item()->setWidth(2);
$request->shipment()->item()->setHeight(3);
$request->shipment()->item()->setDimensionUnit('IN');
$request->shipment()->item()->setWeight(4);
$request->shipment()->item()->setWeightUnit('LB');
$request->shipment()->items()->addItem($request->shipment()->item()->getObject());

// Ship Date.
$request->shipment()->setShipDate('YYYY-MM-DD');

// Shipment Options
$request->shipment()->shipmentOptions()->dhlExpress()->setGlobalProductCode("P");
$request->shipment()->shipmentOptions()->dhlExpress()->setLocalProductCode("P");
$request->shipment()->shipmentOptions()->dhlExpress()->setCurrencyCode("USD");
$request->shipment()->shipmentOptions()->dhlExpress()->setShipperContent("This is shipper content");
$request->shipment()->shipmentOptions()->dhlExpress()->setOtherSpecialServices(array( "HH" ));
$request->shipment()->shipmentOptions()->dhlExpress()->setRegionCode("EU");
$request->shipment()->shipmentOptions()->dhlExpress()->setShippingPaymentType("S");
$request->shipment()->shipmentOptions()->dhlExpress()->setBillingAccountNumber("123456789");
$request->shipment()->shipmentOptions()->dhlExpress()->setGenerateDhlInvoice(true);
$request->shipment()->shipmentOptions()->dhlExpress()->setDhlInvoiceLanguageCode("en");
$request->shipment()->shipmentOptions()->dhlExpress()->setExportReason("This Is Export Reason");
$request->shipment()->shipmentOptions()->dhlExpress()->setExportReasonCode("P");
$request->shipment()->shipmentOptions()->dhlExpress()->setDhlInvoiceType("CMI");
$request->shipment()->shipmentOptions()->dhlExpress()->setExporterId("123456");
$request->shipment()->shipmentOptions()->dhlExpress()->setExporterCode("123456");
$request->shipment()->shipmentOptions()->dhlExpress()->setFreightCost(10);
$request->shipment()->shipmentOptions()->dhlExpress()->setInsuranceCost(10);
$request->shipment()->shipmentOptions()->dhlExpress()->setVatNumber("123456");
$request->shipment()->shipmentOptions()->dhlExpress()->setVatNumberIssuerCountryCode("US");
$request->shipment()->shipmentOptions()->dhlExpress()->setEmailNotification(true);
$request->shipment()->shipmentOptions()->dhlExpress()->setTrackingMessageToEmail("This Is Tracking Message Email");
$request->shipment()->shipmentOptions()->dhlExpress()->setPaperlessTrade(true);
$request->shipment()->shipmentOptions()->dhlExpress()->setRequestArchiveDoc(true);
$request->shipment()->shipmentOptions()->dhlExpress()->setNumberOfArchiveDoc("1");
$request->shipment()->shipmentOptions()->dhlExpress()->setCompanyLogoImageId("img-xyz...");
$request->shipment()->shipmentOptions()->dhlExpress()->setSignatureImageId("img-xyz...");
$request->shipment()->shipmentOptions()->dhlExpress()->setLabelSize("8X4_A4_PDF");
$request->shipment()->shipmentOptions()->dhlExpress()->setIsReturnLabel(true);
$request->shipment()->shipmentOptions()->dhlExpress()->setCreateInvoice(true);
$request->shipment()->shipmentOptions()->dhlExpress()->totalInsuredValue()->setAmount(200);
$request->shipment()->shipmentOptions()->dhlExpress()->totalInsuredValue()->setCurrency("USD");
$request->shipment()->shipmentOptions()->dhlExpress()->signature()->setOptionType("SA");
$request->shipment()->shipmentOptions()->dhlExpress()->dutiable()->setDeclaredValue(130);
$request->shipment()->shipmentOptions()->dhlExpress()->dutiable()->setDeclaredCurrency("USD");
$request->shipment()->shipmentOptions()->dhlExpress()->dutiable()->setTermsOfTrade("DAP");
$request->shipment()->shipmentOptions()->dhlExpress()->dutiable()->setDutyAccountNumber("123456");


// Get JSON.
$requestBody = $request->getRequestJSON();

// Get Token.
$tokenResponse = ReachshipAPIClient::getToken("reachship_client_id", "reachship_client_secret", "sandbox");

// Token.
$token = $tokenResponse['token'];

// Create Shipment.
$createShipmentResponse = ReachshipAPIClient::generateShipment($token, $requestBody, 'sandbox');

// Response as PHP Array.
$responseBody = $createShipmentResponse['message'];

error_log(print_r($responseBody, true));

error_log(json_encode(json_decode($requestBody), JSON_PRETTY_PRINT));

```
