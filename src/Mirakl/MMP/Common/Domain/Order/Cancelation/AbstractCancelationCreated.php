<?php
namespace Mirakl\MMP\Common\Domain\Order\Cancelation;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxAmountCollection;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdown;

/**
 * @method  float                       getAmount()
 * @method  $this                       setAmount(float $amount)
 * @method  AmountBreakdown             getAmountBreakdown()
 * @method  $this                       setAmountBreakdown(AmountBreakdown $amountBreakdown)
 * @method  string                      getCurrencyIsoCode()
 * @method  $this                       setCurrencyIsoCode(string $currencyIsoCode)
 * @method  int                         getId()
 * @method  $this                       setId(int $id)
 * @method  int                         getOrderLineId()
 * @method  $this                       setOrderLineId(int $orderLineId)
 * @method  int                         getQuantity()
 * @method  $this                       setQuantity(int $qty)
 * @method  string                      getReasonCode()
 * @method  $this                       setReasonCode(string $amount)
 * @method  float                       getShippingAmount()
 * @method  $this                       setShippingAmount(float $shippingAmount)
 * @method  AmountBreakdown             getShippingAmountBreakdown()
 * @method  $this                       setShippingAmountBreakdown(AmountBreakdown $shippingAmountBreakdown)
 * @method  OrderTaxAmountCollection    getShippingTaxes()
 * @method  $this                       setShippingTaxes(array|OrderTaxAmountCollection $shippingTaxes)
 * @method  OrderTaxAmountCollection    getTaxes()
 * @method  $this                       setTaxes(array|OrderTaxAmountCollection $taxes)
 */
abstract class AbstractCancelationCreated extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'cancelation_id' => 'id',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'amount_breakdown'          => [AmountBreakdown::class, 'create'],
        'shipping_amount_breakdown' => [AmountBreakdown::class, 'create'],
        'shipping_taxes'            => [OrderTaxAmountCollection::class, 'create'],
        'taxes'                     => [OrderTaxAmountCollection::class, 'create'],
    ];
}
