<?php
namespace Mirakl\MMP\Front\Request\Quote;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Front\Domain\Collection\Quote\Get\QuoteRequestCollection;

/**
 * (Q04) Get quote requests list
 *
 * @method  string[]    getCustomerIds()
 * @method  $this       setCustomerIds(array $customerIds)
 * @method  string[]    getShopIds()
 * @method  $this       setShopIds(array $shopIds)
 * @method  string      getShopQuoteRequestId()
 * @method  $this       setShopQuoteRequestId(string $shopQuoteRequestId)
 * @method  string[]    getStates()
 * @method  $this       setStates(array $states)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Quote\GetQuoteRequestsRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new GetQuoteRequestsRequest();
 *
 * $result = $api->getQuoteRequests($request);
 * // $result => @see \Mirakl\MMP\Front\Domain\Collection\Quote\Get\QuoteRequestCollection
 *
 * </code>
 */
class GetQuoteRequestsRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/quote_request';

    /**
     * @var array
     */
    public $queryParams = [
        'customer_ids',
        'shop_ids',
        'shop_quote_request_id',
        'states'
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return QuoteRequestCollection::decorator('quote_requests');
    }
}