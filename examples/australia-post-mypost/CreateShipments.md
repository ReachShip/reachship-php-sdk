# Create Shipment (Mypost) Full Schema
```php
<?php 
require_once dirname(__FILE__) . '/vendor/autoload.php';

// Create Request Builder Instance.
$builder = new ReachshipRequestBuilder();
$request = $builder->auspostMypost()->createShipments();

// Carrier Object.
$request->carrier()->setName("AUSPOST_MYPOST");
$request->additionalOptions()->auspostMypost()->setStepName("create_shipments");

// From.
$request->shipment()->shipFrom()->setName("Alice");
$request->shipment()->shipFrom()->setPhone("9999999999", "");
$request->shipment()->shipFrom()->setEmail("alice@gmail.com");
$request->shipment()->shipFrom()->setAddressLine1("ibis Styles");
$request->shipment()->shipFrom()->setAddressLine2("40 Elizabeth St");
$request->shipment()->shipFrom()->setCityLocality("Brisbane");
$request->shipment()->shipFrom()->setStateProvince("QLD");
$request->shipment()->shipFrom()->setPostalCode("4000");
$request->shipment()->shipFrom()->setCountryCode("AU");
$request->shipment()->shipFrom()->setBusinessName("Neon Tech");
$request->shipment()->shipFrom()->setAddressType("PARCEL_LOCKER");

// To.
$request->shipment()->shipTo()->setName("Bob");
$request->shipment()->shipTo()->setPhone("9999999999", "");
$request->shipment()->shipTo()->setEmail("bob@gmail.com");
$request->shipment()->shipTo()->setAddressLine1("Rydges Melbourne");
$request->shipment()->shipTo()->setAddressLine2("186 Exhibition St");
$request->shipment()->shipTo()->setCityLocality("Melbourne");
$request->shipment()->shipTo()->setStateProvince("VIC");
$request->shipment()->shipTo()->setPostalCode("3000");
$request->shipment()->shipTo()->setCountryCode("AU");
$request->shipment()->shipTo()->setBusinessName("Algo Tech");
$request->shipment()->shipTo()->setAddressType("STANDARD_ADDRESS");
$request->shipment()->shipTo()->setDeliveryInstructions("Handle with care");

// Shipment Options.
$request->shipment()->shipmentOptions()->auspostMypost()->setShipmentReference("Shipment 1");
$request->shipment()->shipmentOptions()->auspostMypost()->setEmailTrackingEnabled(true);
$request->shipment()->shipmentOptions()->auspostMypost()->setSenderReferences(array("sender ref 1", "sender ref 2"));

// Items.
$request->shipment()->item()->setLength(1);
$request->shipment()->item()->setWidth(2);
$request->shipment()->item()->setHeight(3);
$request->shipment()->item()->setDimensionUnit('IN');
$request->shipment()->item()->setWeight(4);
$request->shipment()->item()->setWeightUnit('LB');

// Item Options.
$request->shipment()->item()->itemOptions()->auspostMypost()->setContainsDangerousGoods(true);
$request->shipment()->item()->itemOptions()->auspostMypost()->setImportReferenceNumber("abcxyz");
$request->shipment()->item()->itemOptions()->auspostMypost()->setProductId("B20");
$request->shipment()->item()->itemOptions()->auspostMypost()->setSignatureOnDelivery(true);
$request->shipment()->item()->itemOptions()->auspostMypost()->setCommercialValue(true);
$request->shipment()->item()->itemOptions()->auspostMypost()->setClassificationType("SALE_OF_GOODS");
$request->shipment()->item()->itemOptions()->auspostMypost()->setDescriptionOfOther("desc");

// Item Contents.
$itemContentObject = $request->shipment()->item()->itemOptions()->auspostMypost()->itemContent();

// Add Item Content 1.
$itemContentObject->setTariffCode("123456");
$itemContentObject->setExportDeclarationNumber("123456789");
$itemContentObject->setCountryOfOrigin("AU");
$itemContentObject->setCoverAmount(12);
$itemContentObject->setWeight(12);
$itemContentObject->setDescription("Item Content 1");
$itemContent1 = $itemContentObject->getObject();
$request->shipment()->item()->itemOptions()->auspostMypost()->addItemContent($itemContent1);

// Clear object.
$itemContentObject->clear();

// Add Item Content 2.
$itemContentObject->setTariffCode("123456");
$itemContentObject->setExportDeclarationNumber("123456789");
$itemContentObject->setDescription("Item Content 2");
$itemContent2 = $itemContentObject->getObject();
$request->shipment()->item()->itemOptions()->auspostMypost()->addItemContent($itemContent2);

// Clear object.
$itemContentObject->clear();

// Add Item.
$request->shipment()->items()->addItem($request->shipment()->item()->getObject());

$shipment1 = $request->shipment()->getObject();
$request->addShipment($shipment1);

// Get JSON.
$requestBody = $request->getRequestJSON();

// Get Token.
$tokenResponse = ReachshipAPIClient::getToken("reachship_client_id", "reachship_client_secret", "sandbox");

// Token.
$token = $tokenResponse['token'];

// Create Shipment (Mypost).
$ratesResponse = ReachshipAPIClient::generateShipment($token, $requestBody, 'sandbox');

// Response as PHP Array.
$responseBody = $ratesResponse['message'];

error_log(print_r($responseBody, true));

```