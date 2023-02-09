# Schedule Pickup (Mypost) Full Schema

```php
<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

// Create Request Builder Instance.
$builder = new ReachshipRequestBuilder();
$request = $builder->auspostMypost()->schedulePickup();

$request->carrier()->setName("AUSPOST_MYPOST");
$request->auspostMypostCreatePickup()->setPickupDate("DD-MM-YYYY");
$request->auspostMypostCreatePickup()->setPickupProductId("PU3");
$request->auspostMypostCreatePickup()->setShipmentIds(["shipment_id_1"]);
$request->auspostMypostCreatePickup()->from()->setName("Alice");
$request->auspostMypostCreatePickup()->from()->setPhone("0411222333");
$request->auspostMypostCreatePickup()->from()->setAddressLine1("L 1 111");
$request->auspostMypostCreatePickup()->from()->setAddressLine2("BOURKE ST");
$request->auspostMypostCreatePickup()->from()->setCityLocality("MELBOURNE");
$request->auspostMypostCreatePickup()->from()->setStateProvince("VIC");
$request->auspostMypostCreatePickup()->from()->setPostalCode("3000");

// Get JSON.
$requestBody = $request->getRequestJSON();

// Get Token.
$tokenResponse = ReachshipAPIClient::getToken("reachship_client_id", "reachship_client_secret", "sandbox");

// Token.
$token = $tokenResponse['token'];

// Schedule Pickup (Mypost).
$schedulePickupResponse = ReachshipAPIClient::schedulePickup($token, $requestBody, 'sandbox');

// Response as PHP Array.
$responseBody = $schedulePickupResponse['message'];

error_log(print_r($responseBody, true));

```
