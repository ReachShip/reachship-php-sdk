# Create Order (Mypost) Full Schema
```php
<?php 
require_once dirname(__FILE__) . '/vendor/autoload.php';

// Create Request Builder Instance.
$builder = new ReachshipRequestBuilder();
$request = $builder->auspostMypost()->CreateOrderAndPickup();

// Carrier Object.
$request->carrier()->setName("AUSPOST_MYPOST");

// Additional Options.
$request->additionalOptions()->auspostMypost()->setStepName("create_order_from_shipments_and_create_pickup");

// Order Object.
$request->orderAndPickup()->order()->setOrderReference("Order 7758");
$request->orderAndPickup()->order()->setShipmentIds(array( "shipment_id_1" ));

// Pickup Object.
$request->orderAndPickup()->pickup()->setPickupIds(array( "pickup_id_1" ));

// Get JSON.
$requestBody = $request->getRequestJSON();

// Get Token.
$tokenResponse = ReachshipAPIClient::getToken("reachship_client_id", "reachship_client_secret", "sandbox");

// Token.
$token = $tokenResponse['token'];

// Create Order (Mypost).
$ratesResponse = ReachshipAPIClient::generateShipment($token, $requestBody, 'sandbox');

// Response as PHP Array.
$responseBody = $ratesResponse['message'];

error_log(print_r($responseBody, true));

```