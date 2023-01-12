# Delete Shipments (Mypost) Full Schema
```php
<?php 
require_once dirname(__FILE__) . '/vendor/autoload.php';

// Create Request Builder Instance.
$builder = new ReachshipRequestBuilder();
$request = $builder->auspostMypost()->deleteShipments();

$request->setCarrierName("AUSPOST_MYPOST");
$request->setShipmentIds(["shipment_id_1"]);

// Get JSON.
$requestBody = $request->getRequestJSON();

// Get Token.
$tokenResponse = ReachshipAPIClient::getToken("reachship_client_id", "reachship_client_secret", "sandbox");

// Token.
$token = $tokenResponse['token'];

// Delete Shipments (Mypost).
$ratesResponse = ReachshipAPIClient::deleteShipments($token, $requestBody, 'sandbox');

// Response as PHP Array.
$responseBody = $ratesResponse['message'];

error_log(print_r($responseBody, true));

```