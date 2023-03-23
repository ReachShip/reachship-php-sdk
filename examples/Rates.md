# Rates Request Full Schema

```php
<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

// Create Request Builder Instance.
$builder = new ReachshipRequestBuilder();
$request = $builder->rates();

// From Address.
$request->shipFrom()->setCityLocality('Cupertino');
$request->shipFrom()->setStateProvince('CA');
$request->shipFrom()->setPostalCode('95014');
$request->shipFrom()->setCountryCode('US');

// To Address.
$request->shipTo()->setCityLocality('Austin');
$request->shipTo()->setStateProvince('TX');
$request->shipTo()->setPostalCode('78756');
$request->shipTo()->setCountryCode('US');

// Add Items.
// Item 1.
$request->item()->setLength(1);
$request->item()->setWidth(2);
$request->item()->setHeight(3);
$request->item()->setDimensionUnit('IN');
$request->item()->setWeight(4);
$request->item()->setWeightUnit('LB');
$request->items()->addItem($request->item()->getObject());

// Item 2.
$request->item()->setLength(5);
$request->item()->setWidth(6);
$request->item()->setHeight(7);
$request->item()->setDimensionUnit('IN');
$request->item()->setWeight(8);
$request->item()->setWeightUnit('LB');
$request->items()->addItem($request->item()->getObject());

// Specify Carriers.
$request->ratesOptions()->setCarriers(["UPS", "STAMPS_USPS", "DHL", "FEDEX", "AUSPOST_MYPOST"]);
$request->ratesOptions()->ups()->setAccountName("ups-account-1");
$request->ratesOptions()->stampsUsps()->setAccountName("stamps-usps-account-1");
$request->ratesOptions()->dhlExpress()->setAccountName("dhl-express-account-1");
$request->ratesOptions()->fedex()->setAccountName("fedex-account-1");
$request->ratesOptions()->auspostMypost()->setAccountName("auspost-mypost-account-1");

// Get JSON.
$requestBody = $request->getRequestJSON();

// Get Token.
$tokenResponse = ReachshipAPIClient::getToken("reachship_client_id", "reachship_client_secret", "sandbox");

// Token.
$token = $tokenResponse['token'];

// Get Rates.
$ratesResponse = ReachshipAPIClient::getRates($token, $requestBody, 'sandbox' );

// Response as PHP Array.
$responseBody = $ratesResponse['message'];

error_log(print_r($responseBody, true));
/*
    Array
    (
        [0] => stdClass Object
            (
                [companyName] => STAMPS_USPS
                [serviceName] => USPS Priority Mail
                [estimatedDelivery] => 1-3 business days
                [totalBaseCharge] => 22.04
                [totalChargeWithTaxes] => 22.04
                [currency] => USD
                [reachshipAccountIdentifier] => stamps-3
                [serviceCode] => US-PM
            )
        [1] => stdClass Object
            (
                [companyName] => UPS
                [serviceName] => UPS Next Day Air Saver
                [serviceCode] => 13
                [estimatedDelivery] => 1 business day
                [totalBaseCharge] => 304.74
                [totalChargeWithTaxes] => 304.74
                [currency] => USD
                [reachshipAccountIdentifier] => ups-sandbox
            )
    )
*/

```
