<?php
namespace Mirakl\MMP\Front\Domain\Quote\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Front\Domain\Collection\Quote\Order\QuoteOrderLineCollection;
use Mirakl\MMP\Front\Domain\Order\Create\CreateOrderPaymentInfo;

/**
 * @method  string                          getChannelCode()
 * @method  $this                           setChannelCode(string $channelCode)
 * @method  string                          getCommercialId()
 * @method  $this                           setCommercialId(string $commercialId)
 * @method  QuoteOrderLineCollection        getLines()
 * @method  $this                           setLines(array|QuoteOrderLineCollection $lines)
 * @method  AdditionalFieldValueCollection  getOrderAdditionalFields()
 * @method  $this                           setOrderAdditionalFields(array|AdditionalFieldValueCollection $additionalFields)
 * @method  int                             getPaymentDuration()
 * @method  $this                           setPaymentDuration(int $paymentDuration)
 * @method  CreateOrderPaymentInfo          getPaymentInfo()
 * @method  $this                           setPaymentInfo(array|CreateOrderPaymentInfo $paymentInfo)
 * @method  string                          getPaymentWorkflow()
 * @method  $this                           setPaymentWorkflow(string $paymentWorkflow)
 * @method  bool                            getScored()
 * @method  bool                            isScored()
 * @method  $this                           setScored(bool $scored)
 */
class OrderFromQuote extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'lines'                   => [QuoteOrderLineCollection::class, 'create'],
        'order_additional_fields' => [AdditionalFieldValueCollection::class, 'create'],
        'payment_info'            => [CreateOrderPaymentInfo::class, 'create'],
    ];
}