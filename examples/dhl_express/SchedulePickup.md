# DHL_EXPRESS SchedulePickup Full Schema

```php
<?php

require_once dirname(__FILE__) . '/vendor/autoload.php';

// Create Request Builder Instance.
$builder = new ReachshipRequestBuilder();
$request = $builder->schedulePickup();


// Shipper Object.
$request->shipper()->setName("Bob");
$request->shipper()->setEmail("bob@gmail.com");
$request->shipper()->setPhone("9090909090", "");
$request->shipper()->setAddressLine1("5501 N");
$request->shipper()->setAddressLine2("Portland Ave");
$request->shipper()->setCityLocality("Oklahoma City");
$request->shipper()->setStateProvince("OK");
$request->shipper()->setPostalCode("73112");
$request->shipper()->setCountryCode("US");


// Carrier Object.
$request->carrier()->setName("DHL_EXPRESS");
$request->carrier()->setServiceCode("N");
$request->carrier()->setAccountName("Primary Account 1");

// Pickup Window Object.
$request->pickupWindow()->setDate("YYYY-MM-DD");
$request->pickupWindow()->setReadyTime("09:00");
$request->pickupWindow()->setCloseTime("19:00");

// Tracking IDs.
$request->setTrackingIds(array("123456789"));

// Destination Country Code
 $request->setDestinationCountryCode("US");

// Items.
$request->item()->setLength(1);
$request->item()->setWidth(2);
$request->item()->setHeight(3);
$request->item()->setDimensionUnit('IN');
$request->item()->setWeight(4);
$request->item()->setWeightUnit('LB');
$request->items()->addItem($request->item()->getObject());

// Get JSON.
$requestBody = $request->getRequestJSON();

// Get Token.
$tokenResponse = ReachshipAPIClient::getToken("reachship_client_id", "reachship_client_secret", "sandbox");

// Token.
$token = $tokenResponse['token'];

// Schedule Pickup.
$schedulePickupResponse = ReachshipAPIClient::trackShipment($token, $requestBody, 'sandbox');

// Response as PHP Array.
$responseBody = $schedulePickupResponse['message'];

error_log(print_r($responseBody, true));
error_log(json_encode(json_decode($requestBody), JSON_PRETTY_PRINT));

```