# (SBC11) List seller billing cycles

```php
use Mirakl\MMP\Shop\Client\ShopApiClient;
use Mirakl\MMP\Shop\Request\SellerBillingCycle\GetSellerBillingCyclesRequest;

$api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');

$request = new GetSellerBillingCyclesRequest();
$request->setPayOutState(['PAID', 'FAILED'])
    ->setCurrency(['EUR'])
    ->setStartDate(new \DateTime('2024-01-01T00:00:00Z'))
    ->setEndDate(new \DateTime('2024-12-31T23:59:59Z'));

$result = $api->getSellerBillingCycles($request);
// $result => @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection

// Loop on collection with $result->getCollection()
$collection = $result->getCollection();
// $collection => @see \Mirakl\MMP\Common\Domain\Collection\SellerBillingCycle\SellerBillingCycleCollection

foreach ($collection as $billingCycle) {
    echo $billingCycle->getId() . ' — ' . $billingCycle->getAmountTransferredToSeller() . ' ' . $billingCycle->getCurrencyIsoCode();

    $payOut = $billingCycle->getPayOut();
    echo ' — pay-out state: ' . $payOut->getState();
}

// Get next results with token from response:
if ($nextToken = $result->getNextPageToken()) {
    $request = new GetSellerBillingCyclesRequest();
    $request->setPageToken($nextToken);
    $result = $api->getSellerBillingCycles($request);
    // $result => @see \Mirakl\MMP\Common\Domain\Collection\SeekableCollection
}
```
