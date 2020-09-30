<?php
namespace Mirakl\MMP\Front\Domain\Quote\Get;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Front\Domain\Collection\Quote\Get\ShopQuoteRequestCollection;
use Mirakl\MMP\Front\Domain\Quote\Create\CreateQuotePaymentInfo;
use Mirakl\MMP\FrontOperator\Domain\Quote\QuoteRequestCustomer;

/**
 * @method  string                      getChannelCode()
 * @method  $this                       setChannelCode(string $channelCode)
 * @method  QuoteRequestCustomer        getCustomer()
 * @method  $this                       setCustomer(array|QuoteRequestCustomer $customer)
 * @method  \DateTime                   getDateCreated()
 * @method  $this                       setDateCreated(\DateTime $dateCreated)
 * @method  string                      getId()
 * @method  $this                       setId(string $id)
 * @method  QuoteInitialRequest         getInitialRequest()
 * @method  $this                       setInitialRequest(array|QuoteInitialRequest $initialRequest)
 * @method  CreateQuotePaymentInfo      getPaymentInfo()
 * @method  $this                       setPaymentInfo(array|CreateQuotePaymentInfo $paymentInfo)
 * @method  string                      getShippingZoneCode()
 * @method  $this                       setShippingZoneCode(string $code)
 * @method  ShopQuoteRequestCollection  getShopQuoteRequests()
 * @method  $this                       setShopQuoteRequests(array|ShopQuoteRequestCollection $shopQuoteRequests)
 * @method  bool                        getTaxesIncluded()
 * @method  bool                        isTaxesIncluded()
 * @method  $this                       setTaxesIncluded(bool $flag)
 */
class QuoteRequest extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'customer'            => [QuoteRequestCustomer::class, 'create'],
        'initial_request'     => [QuoteInitialRequest::class, 'create'],
        'payment_info'        => [CreateQuotePaymentInfo::class, 'create'],
        'shop_quote_requests' => [ShopQuoteRequestCollection::class, 'create'],
    ];
}