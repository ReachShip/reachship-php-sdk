[reachship-homepage]: https://reachship.com
[reachship-developer-docs]: https://developer.reachship.com

ReachShip PHP SDK
=================
A PHP library built on the [ReachShip API][reachship-homepage].

Getting Started
===========
Install ReachShip PHP SDK via [Composer](https://getcomposer.org/):
```bash
composer require reachship/reachship-php-sdk
```

Class Objects
-------------
- **ReachshipRequestBuilder** - This class provides methods to build request body for various [ReachShip API Services][reachship-developer-docs].

Instantiate Request Builder Class
----------------------------
```php
<?php 
require_once dirname(__FILE__) . '/vendor/autoload.php';

// Create Instance.
$builder = new ReachshipRequestBuilder();
$request = $builder->ratesRequest();

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
$request->ratesOptions()->setCarriers(["UPS", "USPS"]);

// Get JSON.
error_log(print_r($request->getRequestJSON(), true));

/*
Above statement will print the following.
{
    "rates_options": {
        "carriers": [
            "UPS",
            "USPS"
        ]
    },
    "shipment": {
        "ship_from": {
            "city_locality": "Cupertino",
            "state_province": "CA",
            "postal_code": "95014",
            "country_code": "US"
        },
        "ship_to": {
            "city_locality": "Austin",
            "state_province": "TX",
            "postal_code": "78756",
            "country_code": "US"
        },
        "packages": [
            {
                "length": {
                    "value": 1,
                    "unit": "IN"
                },
                "width": {
                    "value": 2,
                    "unit": "IN"
                },
                "height": {
                    "value": 3,
                    "unit": "IN"
                },
                "weight": {
                    "value": 4,
                    "unit": "LB"
                }
            },
            {
                "length": {
                    "value": 5,
                    "unit": "IN"
                },
                "width": {
                    "value": 6,
                    "unit": "IN"
                },
                "height": {
                    "value": 7,
                    "unit": "IN"
                },
                "weight": {
                    "value": 8,
                    "unit": "LB"
                }
            }
        ]
    }
}
*/
```

- **ReachshipAPIClient** - This class provides methods to send requests to various [ReachShip API Services][reachship-developer-docs].

```php
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

Examples
-------------
For more examples, refer to **/examples** folder

Contributing
-------------
Contributions, enhancements, and bug-fixes are welcome! Open an issue on GitHub and submit a pull request.