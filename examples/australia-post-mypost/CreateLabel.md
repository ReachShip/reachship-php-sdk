# Create Label (Mypost) Full Schema

```php
<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

// Create Request Builder Instance.
$builder = new ReachshipRequestBuilder();
$request = $builder->auspostMypost()->createLabel();

// Carrier Object.
$request->carrier()->setName("AUSPOST_MYPOST");

// Step Name.
$request->additionalOptions()->auspostMypost()->setStepName("create_labels");

// Label Object.
$request->label()->setIncludeAustraliapostBranding(true);
$request->label()->setShipmentIds(array( "shipment_id_1" ));
$request->label()->layouts()->setExpressPostLayout("A4-1pp");
$request->label()->layouts()->setParcelPostLayout("A4-1pp");

// Get JSON.
$requestBody = $request->getRequestJSON();

// Get Token.
$tokenResponse = ReachshipAPIClient::getToken("reachship_client_id", "reachship_client_secret", "sandbox");

// Token.
$token = $tokenResponse['token'];

// Create Label (Mypost).
$createLabelResponse = ReachshipAPIClient::generateShipment($token, $requestBody, 'sandbox');

// Response as PHP Array.
$responseBody = $createLabelResponse['message'];

error_log(print_r($responseBody, true));

```
