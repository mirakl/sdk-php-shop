<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order\Cancelation;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\Fee\CancelationFeeCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxAmountCollection;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdown;

/**
 * @method float           getAmount()
 * @method $this           setAmount(float $amount)
 * @method AmountBreakdown getAmountBreakdown() @deprecated
 * @method $this           setAmountBreakdown(AmountBreakdown $amountBreakdown) @deprecated
 * @method string          getCurrencyIsoCode()
 * @method $this                    setCurrencyIsoCode(string $currencyIsoCode)`
 * @method CancelationFeeCollection getFees()
 * @method $this                    setFees(CancelationFeeCollection|array $fees)
 * @method string                   getOrderLineId()
 * @method $this                    setOrderLineId(string $orderLineId)
 * @method int                      getQuantity()
 * @method $this                    setQuantity(int $quantity)
 * @method string                   getReasonCode()
 * @method $this                    setReasonCode(string $reasonCode)
 * @method float                    getShippingAmount()
 * @method $this                    setShippingAmount(float $shippingAmount)
 * @method AmountBreakdown          getShippingAmountBreakdown() @deprecated
 * @method $this                    setShippingAmountBreakdown(AmountBreakdown|array $shippingAmountBreakdown) @deprecated
 * @method OrderTaxAmountCollection getShippingTaxes()
 * @method $this                    setShippingTaxes(OrderTaxAmountCollection|array $shippingTaxes)
 * @method OrderTaxAmountCollection getTaxes()
 * @method $this                    setTaxes(OrderTaxAmountCollection|array $taxes)
 */
abstract class AbstractCreateCancelation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'amount_breakdown'          => [AmountBreakdown::class, 'create'],
        'fees'                      => [CancelationFeeCollection::class, 'create'],
        'shipping_amount_breakdown' => [AmountBreakdown::class, 'create'],
        'shipping_taxes'            => [OrderTaxAmountCollection::class, 'create'],
        'taxes'                     => [OrderTaxAmountCollection::class, 'create'],
    ];
}
