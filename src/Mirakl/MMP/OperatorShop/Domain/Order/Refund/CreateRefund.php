<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Order\Refund;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\Fee\RefundFeeCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxAmountCollection;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdown;
use Mirakl\MMP\Common\Domain\Order\DiscardPurchaseInformation;

/**
 * @method float                      getAmount()
 * @method $this                      setAmount(float $amount)
 * @method AmountBreakdown            getAmountBreakdown() @deprecated
 * @method $this                      setAmountBreakdown(AmountBreakdown|array $amountBreakdown) @deprecated
 * @method string                     getCurrencyIsoCode()
 * @method $this                      setCurrencyIsoCode(string $currencyIsoCode)
 * @method bool                       getExcludedFromShipment()
 * @method $this                      setExcludedFromShipment(bool $excludedFromShipment)
 * @method RefundFeeCollection        getFees()
 * @method $this                      setFees(RefundFeeCollection|array $fees)
 * @method string                     getOrderLineId()
 * @method $this                      setOrderLineId(string $orderLineId)
 * @method DiscardPurchaseInformation getPurchaseInformation()
 * @method $this                      setPurchaseInformation(DiscardPurchaseInformation|array $purchaseInformation)
 * @method int                        getQuantity()
 * @method $this                      setQuantity(int $quantity)
 * @method string                     getReasonCode()
 * @method $this                      setReasonCode(string $reasonCode)
 * @method float                      getShippingAmount()
 * @method $this                      setShippingAmount(float $shippingAmount)
 * @method AmountBreakdown            getShippingAmountBreakdown() @deprecated
 * @method $this                      setShippingAmountBreakdown(AmountBreakdown $shippingAmountBreakdown) @deprecated
 * @method OrderTaxAmountCollection   getShippingTaxes()
 * @method $this                      setShippingTaxes(OrderTaxAmountCollection|array $shippingTaxes)
 * @method OrderTaxAmountCollection   getTaxes()
 * @method $this                      setTaxes(OrderTaxAmountCollection|array $taxes)
 * @method \DateTime                  getTransactionDate()
 * @method $this                      setTransactionDate(\DateTime $transactionDate)
 */
class CreateRefund extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'amount_breakdown'          => [AmountBreakdown::class, 'create'],
        'fees'                      => [RefundFeeCollection::class, 'create'],
        'purchase_information'      => [DiscardPurchaseInformation::class, 'create'],
        'shipping_amount_breakdown' => [AmountBreakdown::class, 'create'],
        'shipping_taxes'            => [OrderTaxAmountCollection::class, 'create'],
        'taxes'                     => [OrderTaxAmountCollection::class, 'create'],
    ];
}
