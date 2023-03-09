<?php
namespace Mirakl\MMP\OperatorShop\Domain\Order\Refund;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxAmountCollection;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdown;
use Mirakl\MMP\Common\Domain\Order\DiscardPurchaseInformation;

/**
 * @method  float                       getAmount()
 * @method  $this                       setAmount(float $amount)
 * @method  AmountBreakdown             getAmountBreakdown() // @deprecated
 * @method  $this                       setAmountBreakdown(AmountBreakdown $amountBreakdown) // @deprecated
 * @method  string                      getCurrencyIsoCode()
 * @method  $this                       setCurrencyIsoCode(string $currencyIsoCode)
 * @method  DiscardPurchaseInformation  getPurchaseInformation()
 * @method  $this                       setPurchaseInformation(DiscardPurchaseInformation $purchaseInformation)
 * @method  int                         getQuantity()
 * @method  $this                       setQuantity(int $qty)
 * @method  string                      getReasonCode()
 * @method  $this                       setReasonCode(string $reasonCode)
 * @method  float                       getShippingAmount()
 * @method  $this                       setShippingAmount(float $amount)
 * @method  AmountBreakdown             getShippingAmountBreakdown() // @deprecated
 * @method  $this                       setShippingAmountBreakdown(AmountBreakdown $shippingAmountBreakdown) // @deprecated
 * @method  OrderTaxAmountCollection    getShippingTaxes()
 * @method  $this                       setShippingTaxes(array|OrderTaxAmountCollection $shippingTaxes)
 * @method  OrderTaxAmountCollection    getTaxes()
 * @method  $this                       setTaxes(array|OrderTaxAmountCollection $taxes)
 * @method  \DateTime                   getTransactionDate()
 * @method  $this                       setTransactionDate(\DateTime $transactionDate)
 * @method  string                      getOrderLineId()
 * @method  $this                       setOrderLineId(string $id)
 * @method  bool                        getExcludedFromShipment()
 * @method  $this                       setExcludedFromShipment(bool $excludedFromShipment)
 */
class CreateRefund extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'amount_breakdown'          => [AmountBreakdown::class, 'create'],
        'purchase_information'      => [DiscardPurchaseInformation::class, 'create'],
        'shipping_amount_breakdown' => [AmountBreakdown::class, 'create'],
        'shipping_taxes'            => [OrderTaxAmountCollection::class, 'create'],
        'taxes'                     => [OrderTaxAmountCollection::class, 'create'],
    ];
}