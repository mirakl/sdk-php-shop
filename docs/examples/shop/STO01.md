# (STO01) Import a stock file

```php
use Mirakl\MMP\Shop\Client\ShopApiClient;
use Mirakl\MMP\Shop\Request\Offer\Stock\CreateOffersStockImportsRequest;

$api = new ShopApiClient('https://your-marketplace.mirakl.net/api', 'your-api-key', 'your-shop-id');

$request = new CreateOffersStockImportsRequest(new \SplFileObject('/path/to/stock.csv'));

$result = $api->createOffersStockImports($request);
// $result => @see \Mirakl\MMP\Common\Domain\Offer\Stock\OffersStockImportsResponse
// $result->getImportId()
```
