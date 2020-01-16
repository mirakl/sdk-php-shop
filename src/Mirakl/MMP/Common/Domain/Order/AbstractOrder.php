<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Order\State\OrderStatus;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Promotion\OrderPromotionsSummary;

/**
 * @method  \DateTime                       getAcceptanceDecisionDate()
 * @method  $this                           setAcceptanceDecisionDate(\DateTime $acceptanceDecisionDate)
 * @method  Channel                         getChannel()
 * @method  $this                           setChannel(array|Channel $channel)
 * @method  string                          getCommercialId()
 * @method  $this                           setCommercialId(string $commercialId)
 * @method  \DateTime                       getCreatedDate()
 * @method  $this                           setCreatedDate(\DateTime $createdDate)
 * @method  string                          getCurrencyIsoCode()
 * @method  $this                           setCurrencyIsoCode(string $currencyCode)
 * @method  \DateTime                       getCustomerDebitedDate()
 * @method  $this                           setCustomerDebitedDate(\DateTime $customerDebitedDate)
 * @method  bool                            getHasCustomerMessage()
 * @method  $this                           setHasCustomerMessage(bool $hasCustomerMessage)
 * @method  bool                            getHasIncident()
 * @method  $this                           setHasIncident(bool $hasIncident)
 * @method  bool                            getHasInvoice()
 * @method  $this                           setHasInvoice(bool $hasInvoice)
 * @method  string                          getId()
 * @method  $this                           setId(string $id)
 * @method  \DateTime                       getLastUpdatedDate()
 * @method  $this                           setLastUpdatedDate(\DateTime $lastUpdatedDate)
 * @method  int                             getLeadtimeToShip()
 * @method  $this                           setLeadtimeToShip(int $leadtimeToShip)
 * @method  AdditionalFieldValueCollection  getOrderAdditionalFields()
 * @method  $this                           setOrderAdditionalFields(array|AdditionalFieldValueCollection $additionalFields)
 * @method  int                             getPaymentDuration()
 * @method  $this                           setPaymentDuration(int $paymentDuration)
 * @method  string                          getPaymentType()
 * @method  $this                           setPaymentType(string $paymentType)
 * @method  string                          getPaymentWorkflow()
 * @method  $this                           setPaymentWorkflow(string $paymentWorkflow)
 * @method  float                           getPrice()
 * @method  $this                           setPrice(float $price)
 * @method  OrderPromotionsSummary          getPromotions()
 * @method  $this                           setPromotions(array|OrderPromotionsSummary $promotions)
 * @method  string                          getQuoteId()
 * @method  $this                           setQuoteId(string $quoteId)
 * @method  OrderShipping                   getShipping()
 * @method  $this                           setShipping(array|OrderShipping $shipping)
 * @method  \DateTime                       getShippingDeadline()
 * @method  $this                           setShippingDeadline(\DateTime $shippingDeadline)
 * @method  OrderStatus                     getStatus()
 * @method  $this                           setStatus(array|OrderStatus $status)
 * @method  float                           getTotalCommission()
 * @method  $this                           setTotalCommission(float $commission)
 * @method  float                           getTotalPrice()
 * @method  $this                           setTotalPrice(float $totalPrice)
 */
abstract class AbstractOrder extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'order_id'                 => 'id',
        'order_state'              => 'status/state',
        'order_state_reason_code'  => 'status/reason/code',
        'order_state_reason_label' => 'status/reason/label',
        'state'                    => 'status/state',
        'shipping_carrier_code'    => 'shipping/carrier_code',
        'shipping_company'         => 'shipping/company',
        'shipping_price'           => 'shipping/price',
        'shipping_tracking'        => 'shipping/tracking_number',
        'shipping_tracking_url'    => 'shipping/tracking_url',
        'shipping_type_code'       => 'shipping/type/code',
        'shipping_type_label'      => 'shipping/type/label',
        'shipping_zone_code'       => 'shipping/zone/code',
        'shipping_zone_label'      => 'shipping/zone/label',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_additional_fields' => [AdditionalFieldValueCollection::class, 'create'],
        'shipping'                => [OrderShipping::class, 'create'],
        'channel'                 => [Channel::class, 'create'],
        'promotions'              => [OrderPromotionsSummary::class, 'create'],
        'status'                  => [OrderStatus::class, 'create'],
    ];
}