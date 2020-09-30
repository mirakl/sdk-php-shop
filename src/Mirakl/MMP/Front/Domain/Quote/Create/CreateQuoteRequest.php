<?php
namespace Mirakl\MMP\Front\Domain\Quote\Create;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Front\Domain\Collection\Quote\Create\QuoteOfferCollection;
use Mirakl\MMP\Front\Domain\Collection\Quote\Create\ShopQuoteRequestCreateDocumentCollection;
use Mirakl\MMP\FrontOperator\Domain\Quote\QuoteRequestCustomer;

/**
 * @method  string                                      getBody()
 * @method  $this                                       setBody(string $body)
 * @method  string                                      getChannelCode()
 * @method  $this                                       setChannelCode(string $channelCode)
 * @method  QuoteRequestCustomer                        getCustomer()
 * @method  $this                                       setCustomer(array|QuoteRequestCustomer $customer)
 * @method  \DateTime                                   getDateCreated()
 * @method  $this                                       setDateCreated(\DateTime $dateCreated)
 * @method  ShopQuoteRequestCreateDocumentCollection    getDocuments()
 * @method  $this                                       setDocuments(array|ShopQuoteRequestCreateDocumentCollection $documents)
 * @method  string                                      getId()
 * @method  $this                                       setId(string $id)
 * @method  QuoteOfferCollection                        getOffers()
 * @method  $this                                       setOffers(array|QuoteOfferCollection $offers)
 * @method  CreateQuotePaymentInfo                      getPaymentInfo()
 * @method  $this                                       setPaymentInfo(array|CreateQuotePaymentInfo $paymentInfo)
 * @method  bool                                        getScored()
 * @method  bool                                        isScored()
 * @method  $this                                       setScored(bool $flag)
 * @method  string                                      getShippingZoneCode()
 * @method  $this                                       setShippingZoneCode(string $code)
 * @method  string                                      getSubject()
 * @method  $this                                       setSubject(string $subject)
 * @method  bool                                        getTaxesIncluded()
 * @method  bool                                        isTaxesIncluded()
 * @method  $this                                       setTaxesIncluded(bool $flag)
 */
class CreateQuoteRequest extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'customer'     => [QuoteRequestCustomer::class, 'create'],
        'documents'    => [ShopQuoteRequestCreateDocumentCollection::class, 'create'],
        'offers'       => [QuoteOfferCollection::class, 'create'],
        'payment_info' => [CreateQuotePaymentInfo::class, 'create'],
    ];
}