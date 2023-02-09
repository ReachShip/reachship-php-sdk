# Create Order (Mypost) Full Schema

```php
<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

// Create Request Builder Instance.
$builder = new ReachshipRequestBuilder();
$request = $builder->auspostMypost()->createOrder();

// Carrier Object.
$request->carrier()->setName("AUSPOST_MYPOST");

// Additional Options.
$request->additionalOptions()->auspostMypost()->setStepName("create_order_from_shipments");

// Order Object.
$request->order()->setOrderReference("Order 7758");
$request->order()->setShipmentIds(["shipment_id_1"]);

// Get JSON.
$requestBody = $request->getRequestJSON();

// Get Token.
$tokenResponse = ReachshipAPIClient::getToken("reachship_client_id", "reachship_client_secret", "sandbox");

// Token.
$token = $tokenResponse['token'];

// Create Order (Mypost).
$createOrderResponse = ReachshipAPIClient::generateShipment($token, $requestBody, 'sandbox');

// Response as PHP Array.
$responseBody = $createOrderResponse['message'];

error_log(print_r($responseBody, true));

```
