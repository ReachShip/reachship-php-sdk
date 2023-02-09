# Recover Shipment URL Full Schema

```php
<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

// Create Request Builder Instance.
$builder = new ReachshipRequestBuilder();
$request = $builder->recoverShipmentUrl();
$request->setUrl("https://sandbox-shipments.reachship.com/xxxxxxxxx/xxxxxxxx/sample.pdf");

// Get JSON.
$requestBody = $request->getRequestJSON();

// Get Token.
$tokenResponse = ReachshipAPIClient::getToken("reachship_client_id", "reachship_client_secret", "sandbox");

// Token.
$token = $tokenResponse['token'];

// Recover Shipment URL.
$recoverShipmentResponse = ReachshipAPIClient::deleteShipments($token, $requestBody, 'sandbox');

// Response as PHP Array.
$responseBody = $recoverShipmentResponse['message'];

error_log(print_r($responseBody, true));
```
