<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Fulfillment\Fulfillment;
use Mirakl\MMP\Common\Domain\Order\State\OrderStatus;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Promotion\OrderPromotionsSummary;

/**
 * @method  \DateTime                       getAcceptanceDecisionDate()
 * @method  $this                           setAcceptanceDecisionDate(\DateTime $acceptanceDecisionDate)
 * @method  bool                            getCanShopShip()
 * @method  $this                           setCanShopShip(bool $canShopShip)
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
 * @method  DeliveryDate                    getDeliveryDate()
 * @method  $this                           setDeliveryDate(DeliveryDate $deliveryDate)
 * @method  Fulfillment                     getFulfillment()
 * @method  $this                           setFulfillment(Fulfillment $fulfillment)
 * @method  bool                            getFullyRefunded()
 * @method  $this                           setFullyRefunded(bool $fullyRefunded)
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
 * @method  int                             getLeadtimeToShip() @deprecated Please use getShippingDeadline() instead.
 * @method  $this                           setLeadtimeToShip(int $leadtimeToShip) @deprecated Please use setShippingDeadline() instead.
 * @method  AdditionalFieldValueCollection  getOrderAdditionalFields()
 * @method  $this                           setOrderAdditionalFields(array|AdditionalFieldValueCollection $additionalFields)
 * @method  string                          getOrderTaxMode()
 * @method  $this                           setOrderTaxMode(string $orderTaxMode)
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
 * @method  OrderReferences                 getReferences()
 * @method  $this                           setReferences(array|OrderReferences $references)
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
 * @method  \DateTime                       getTransactionDate()
 * @method  $this                           setTransactionDate(\DateTime $transactionDate)
 * @method  string                          getTransactionNumber()
 * @method  $this                           setTransactionNumber(string $transactionNumber)
 * @method  bool                            getCustomerDirectlyPaysSeller()
 * @method  $this                           setCustomerDirectlyPaysSeller(bool $customerDirectlyPaysSeller)
 * @method  InvoiceDetails                  getInvoiceDetails()
 * @method  $this                           setInvoiceDetails(InvoiceDetails $invoiceDetails)
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
        'shipping_pudo_id'         => 'shipping/pudo_id',
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
        'channel'                 => [Channel::class, 'create'],
        'delivery_date'           => [DeliveryDate::class, 'create'],
        'fulfillment'             => [Fulfillment::class, 'create'],
        'order_additional_fields' => [AdditionalFieldValueCollection::class, 'create'],
        'promotions'              => [OrderPromotionsSummary::class, 'create'],
        'shipping'                => [OrderShipping::class, 'create'],
        'status'                  => [OrderStatus::class, 'create'],
        'references'              => [OrderReferences::class, 'create'],
        'invoice_details'         => [InvoiceDetails::class, 'create'],
    ];
}
