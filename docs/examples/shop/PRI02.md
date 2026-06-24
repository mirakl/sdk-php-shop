# (PRI02) Get information and statistics about an offer pricing import

```php
use Mirakl\MMP\Shop\Client\ShopApiClient;
use Mirakl\MMP\Shop\Request\Offer\Pricing\Importer\OfferPricingsImportReportsRequest

$api = new ShopApiClient('https://your-marketplace.mirakl.net/api', 'your-api-key', 'your-shop-id');

$request = new OfferPricingsImportReportsRequest();
$request->setShopId(2000);
$request->setImportIds(['7a22652f-8898-4d44-a25d-ed9c424bef7f', '5cc5152e-6361-493c-86fa-e0c9a7a25d12']);
$request->setStartDate(new \DateTime('2024-06-01'));
$request->setEndDate(new \DateTime('2024-06-31'));
$request->setStatus('COMPLETE');
$request->setOrigins(['API', 'SFTP']);

$result = $api->getOfferPricingsImportReports($request);

// Loop on collection with $result->getCollection()

// Get next results with token from response:
$request = new OfferPricingsImportReportsRequest();
$request->setPageToken($result->getNextPageToken());
$result = $api->getOfferPricingsImportReports($request);

// See also previous token: @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection::getPreviousPageToken()
```
