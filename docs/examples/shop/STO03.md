# (STO03) Get the error report for a stock import in CSV format

```php
use Mirakl\MMP\Shop\Client\ShopApiClient;
use Mirakl\MMP\Shop\Request\Offer\Stock\GetOffersStockImportsErrorReportRequest;

$api = new ShopApiClient('https://your-marketplace.mirakl.net/api', 'your-api-key', 'your-shop-id');

$request = new GetOffersStockImportsErrorReportRequest('import-12345');

$result = $api->getOffersStockImportsErrorReport($request);
// $result => @see \Mirakl\Core\Domain\FileWrapper
// Download file:
$result->download();
```
