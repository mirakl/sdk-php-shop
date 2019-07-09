## Mirakl PHP SDK for sellers

This is the official Mirakl PHP API client for the `shop` role.

### How to use

```php
<?php
require 'vendor/autoload.php';

use Mirakl\MMP\Shop\Client\ShopApiClient;
use Mirakl\MMP\Shop\Request\Offer\GetOfferRequest;

// Environment parameters
$url = 'https://your.env/api';
$apiKey = 'your_api_key';

try {
    // Instantiating the Mirakl API Client
    $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');

    // Building request
    $request = new GetOfferRequest('OFFER_ID');

    // Calling the API
    $result = $api->getOffer($request);
    var_dump($result); // \Mirakl\MMP\Shop\Domain\Offer\ShopOffer

    // You can also retrieve raw response by using run() method of API client:
    $result = $api->run($request); // or $api->raw()->getOffer($request)
    var_dump($result); // returns \Psr\Http\Message\ResponseInterface

} catch (\Exception $e) {
    // An exception is thrown if object requested is not found or if an error occurs
    var_dump($e);
}
```
