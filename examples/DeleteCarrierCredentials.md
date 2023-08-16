# Delete Carrier Credentials Full Schema

```php
<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

// Create Request Builder Instance.
$builder = new ReachshipRequestBuilder();
$request = $builder->deleteCarrierCredentials();

// Request.
$request->setCarrierName('DHL');
$request->setAccountName('Account 1');
$request->setAlternativePrimaryAccountName('Account 2');

// Get JSON.
$requestBody = $request->getRequestJSON();

// Get Token.
$tokenResponse = ReachshipAPIClient::getToken("reachship_client_id", "reachship_client_secret", "sandbox");

// Token.
$token = $tokenResponse['token'];

// Delete Credentials.
$deleteCredentialsResponse = ReachshipAPIClient::deleteShipments($token, $requestBody, 'sandbox');

// Response as PHP Array.
$responseBody = $deleteCredentialsResponse['message'];

error_log(print_r($responseBody, true));
```
