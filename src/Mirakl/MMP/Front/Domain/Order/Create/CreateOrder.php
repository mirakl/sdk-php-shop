<?php
namespace Mirakl\MMP\Front\Domain\Order\Create;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\FrontOperator\Domain\Order\OrderCustomer;
use Mirakl\MMP\Front\Domain\Collection\Order\Create\CreateOrderOfferCollection;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;

/**
 * @method  string                          getChannelCode()
 * @method  $this                           setChannelCode(string $channelCode)
 * @method  string                          getCommercialId()
 * @method  $this                           setCommercialId(string $commercialId)
 * @method  OrderCustomer                   getCustomer()
 * @method  $this                           setCustomer(array|OrderCustomer $customer)
 * @method  CreateOrderOfferCollection      getOffers()
 * @method  $this                           setOffers(array|CreateOrderOfferCollection $offers)
 * @method  AdditionalFieldValueCollection  getOrderAdditionalFields()
 * @method  $this                           setOrderAdditionalFields(array|AdditionalFieldValueCollection $orderAdditionalFields)
 * @method  int                             getPaymentDuration()
 * @method  $this                           setPaymentDuration(int $paymentDuration)
 * @method  CreateOrderPaymentInfo          getPaymentInfo()
 * @method  $this                           setPaymentInfo(array|CreateOrderPaymentInfo $paymentInfo)
 * @method  string                          getPaymentWorkflow()
 * @method  $this                           setPaymentWorkflow(string $paymentWorkflow)
 * @method  bool                            getScored()
 * @method  $this                           setScored(bool $scored)
 * @method  string                          getShippingZoneCode()
 * @method  $this                           setShippingZoneCode(string $code)
 */
class CreateOrder extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'customer'                => [OrderCustomer::class, 'create'],
        'offers'                  => [CreateOrderOfferCollection::class, 'create'],
        'order_additional_fields' => [AdditionalFieldValueCollection::class, 'create'],
        'payment_info'            => [CreateOrderPaymentInfo::class, 'create'],
    ];
}