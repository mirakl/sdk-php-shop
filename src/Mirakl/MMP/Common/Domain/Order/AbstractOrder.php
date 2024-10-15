<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxesCollection;
use Mirakl\MMP\Common\Domain\Fulfillment\Fulfillment;
use Mirakl\MMP\Common\Domain\Order\State\OrderStatus;
use Mirakl\MMP\Common\Domain\Promotion\OrderPromotionsSummary;

/**
 * @method \DateTime                      getAcceptanceDecisionDate()
 * @method $this                          setAcceptanceDecisionDate(\DateTime $acceptanceDecisionDate)
 * @method bool                           getCanCancel()
 * @method $this                          setCanCancel(bool $canCancel)
 * @method bool                           getCanShopShip()
 * @method $this                          setCanShopShip(bool $canShopShip)
 * @method Channel                        getChannel()
 * @method $this                          setChannel(Channel|array $channel)
 * @method string                         getCommercialId()
 * @method $this                          setCommercialId(string $commercialId)
 * @method \DateTime                      getCreatedDate()
 * @method $this                          setCreatedDate(\DateTime $createdDate)
 * @method string                         getCurrencyIsoCode()
 * @method $this                          setCurrencyIsoCode(string $currencyIsoCode)
 * @method \DateTime                      getCustomerDebitedDate()
 * @method $this                          setCustomerDebitedDate(\DateTime $customerDebitedDate)
 * @method bool                           getCustomerDirectlyPaysSeller()
 * @method $this                          setCustomerDirectlyPaysSeller(bool $customerDirectlyPaysSeller)
 * @method DeliveryDate                   getDeliveryDate()
 * @method $this                          setDeliveryDate(DeliveryDate|array $deliveryDate)
 * @method Fulfillment                    getFulfillment()
 * @method $this                          setFulfillment(Fulfillment|array $fulfillment)
 * @method bool                           getFullyRefunded()
 * @method $this                          setFullyRefunded(bool $fullyRefunded)
 * @method bool                           getHasCustomerMessage()
 * @method $this                          setHasCustomerMessage(bool $hasCustomerMessage)
 * @method bool                           getHasIncident()
 * @method $this                          setHasIncident(bool $hasIncident)
 * @method bool                           getHasInvoice()
 * @method $this                          setHasInvoice(bool $hasInvoice)
 * @method string                         getId()
 * @method $this                          setId(string $id)
 * @method InvoiceDetails                 getInvoiceDetails()
 * @method $this                          setInvoiceDetails(InvoiceDetails|array $invoiceDetails)
 * @method \DateTime                      getLastUpdatedDate()
 * @method $this                          setLastUpdatedDate(\DateTime $lastUpdatedDate)
 * @method int                            getLeadtimeToShip() @deprecated Please use getShippingDeadline() instead.
 * @method $this                          setLeadtimeToShip(int $leadtimeToShip) @deprecated Please use setShippingDeadline() instead.
 * @method AdditionalFieldValueCollection getOrderAdditionalFields()
 * @method $this                          setOrderAdditionalFields(AdditionalFieldValueCollection|array $orderAdditionalFields)
 * @method string                         getOrderTaxMode()
 * @method $this                          setOrderTaxMode(string $orderTaxMode)
 * @method OrderTaxesCollection           getOrderTaxes()
 * @method $this                          setOrderTaxes(OrderTaxesCollection|array $orderTaxes)
 * @method int                            getPaymentDuration()
 * @method $this                          setPaymentDuration(int $paymentDuration)
 * @method string                         getPaymentType()
 * @method $this                          setPaymentType(string $paymentType)
 * @method string                         getPaymentWorkflow()
 * @method $this                          setPaymentWorkflow(string $paymentWorkflow)
 * @method float                          getPrice()
 * @method $this                          setPrice(float $price)
 * @method OrderPromotionsSummary         getPromotions()
 * @method $this                          setPromotions(OrderPromotionsSummary|array $promotions)
 * @method string                         getQuoteId()
 * @method $this                          setQuoteId(string $quoteId)
 * @method OrderReferences                getReferences()
 * @method $this                          setReferences(OrderReferences|array $references)
 * @method OrderShipping                  getShipping()
 * @method $this                          setShipping(OrderShipping|array $shipping)
 * @method \DateTime                      getShippingDeadline()
 * @method $this                          setShippingDeadline(\DateTime $shippingDeadline)
 * @method OrderStatus                    getStatus()
 * @method $this                          setStatus(OrderStatus|array $status)
 * @method float                          getTotalCommission()
 * @method $this                          setTotalCommission(float $totalCommission)
 * @method float                          getTotalPrice()
 * @method $this                          setTotalPrice(float $totalPrice)
 * @method \DateTime                      getTransactionDate()
 * @method $this                          setTransactionDate(\DateTime $transactionDate)
 * @method string                         getTransactionNumber()
 * @method $this                          setTransactionNumber(string $transactionNumber)
 */
abstract class AbstractOrder extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'order_id'                       => 'id',
        'order_state'                    => 'status/state',
        'order_state_reason_code'        => 'status/reason/code',
        'order_state_reason_label'       => 'status/reason/label',
        'state'                          => 'status/state',
        'shipping_carrier_code'          => 'shipping/carrier_code',
        'shipping_carrier_standard_code' => 'shipping/carrier_standard_code',
        'shipping_company'               => 'shipping/company',
        'shipping_price'                 => 'shipping/price',
        'shipping_pudo_id'               => 'shipping/pudo_id',
        'shipping_tracking'              => 'shipping/tracking_number',
        'shipping_tracking_url'          => 'shipping/tracking_url',
        'shipping_type_code'             => 'shipping/type/code',
        'shipping_type_label'            => 'shipping/type/label',
        'shipping_type_standard_code'    => 'shipping/type/standard_code',
        'shipping_zone_code'             => 'shipping/zone/code',
        'shipping_zone_label'            => 'shipping/zone/label',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'channel'                 => [Channel::class, 'create'],
        'delivery_date'           => [DeliveryDate::class, 'create'],
        'fulfillment'             => [Fulfillment::class, 'create'],
        'invoice_details'         => [InvoiceDetails::class, 'create'],
        'order_additional_fields' => [AdditionalFieldValueCollection::class, 'create'],
        'order_taxes'             => [OrderTaxesCollection::class, 'create'],
        'promotions'              => [OrderPromotionsSummary::class, 'create'],
        'references'              => [OrderReferences::class, 'create'],
        'shipping'                => [OrderShipping::class, 'create'],
        'status'                  => [OrderStatus::class, 'create'],
    ];
}
