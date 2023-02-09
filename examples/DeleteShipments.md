# Delete Shipment(s) Full Schema

```php
<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

// Create Request Builder Instance.
$builder = new ReachshipRequestBuilder();
$request = $builder->deleteShipments();

// From Address.
$request->setCarrierName('DHL');
$request->setTrackingIds(["tracking_id_1", "tracking_id_2"]);

// Get JSON.
$requestBody = $request->getRequestJSON();

// Get Token.
$tokenResponse = ReachshipAPIClient::getToken("reachship_client_id", "reachship_client_secret", "sandbox");

// Token.
$token = $tokenResponse['token'];

// Delete Shipment(s).
$deleteShipmentsResponse = ReachshipAPIClient::deleteShipments($token, $requestBody, 'sandbox');

// Response as PHP Array.
$responseBody = $deleteShipmentsResponse['message'];

error_log(print_r($responseBody, true));
```
