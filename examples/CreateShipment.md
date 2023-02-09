# Create Shipment Full Schema

```php
<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

// Create Request Builder Instance.
$builder = new ReachshipRequestBuilder();
$request = $builder->createShipment();

// Carrier Object.
$request->carrier()->setName("FEDEX");
$request->carrier()->setServiceCode("PRIORITY_OVERNIGHT");
$request->carrier()->setServiceCode("YOUR_PACKAGING");
$request->carrier()->setAccountName("fedex-sandbox");

// From Object.
$request->shipment()->shipFrom()->setName("Bob");
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

```
