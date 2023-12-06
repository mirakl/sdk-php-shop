## Mirakl PHP SDK

`mirakl-sdk-php` is the official Mirakl PHP API client.

### How to use

```php
<?php
/**
 * This example is for the role Frontend. For any other role there is another client.
 * For the role Shop the appropriate client is \Mirakl\MMP\Shop\Client\ShopApiClient
 */
require 'vendor/autoload.php';

use Mirakl\MMP\Front\Client\FrontApiClient as MiraklApiClient;
use Mirakl\MMP\Front\Request\Offer\GetOfferRequest;

// Environment parameters
$url = 'https://your.env/api';
$apiKey = 'your_api_key';

try {
    // Building request
    $request = new GetOfferRequest('2000');

    // Instantiating the Mirakl API Client
    $api = new MiraklApiClient($url, $apiKey);

    // Calling the API
    $result = $api->getOffer($request);
    var_dump($result); // decorated response

    // You can also retrieve raw response by using run() method of API client:
    $result = $api->run($request); // or $api->raw()->getOffer($request)
    var_dump($result); // returns \Psr\Http\Message\ResponseInterface

} catch (\Exception $e) {
    // An exception is thrown if object requested is not found or if an error occurs
    var_dump($e);
}
```