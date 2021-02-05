<?php
namespace Mirakl\MMP\Common\Domain\Adjust;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Adjust\AdjustmentTaxCollection;

/**
 * @method  float                   getAmount()
 * @method  $this                   setAmount(float $amount)
 * @method  string                  getCurrencyIsoCode()
 * @method  $this                   setCurrencyIsoCode(string $currencyIsoCode)
 * @method  int                     getQuantity()
 * @method  $this                   setQuantity(int $quantity)
 * @method  string                  getReasonCode()
 * @method  $this                   setReasonCode(string $reasonCode)
 * @method  float                   getShippingAmount()
 * @method  $this                   setShippingAmount(float $shippingAmount)
 * @method  AdjustmentTaxCollection getShippingTaxes()
 * @method  $this                   setShippingTaxes(array|AdjustmentTaxCollection $shippingTaxes)
 * @method  AdjustmentTaxCollection getTaxes()
 * @method  $this                   setTaxes(array|AdjustmentTaxCollection $taxes)
 */
class AdjustmentRefund extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipping_taxes' => [AdjustmentTaxCollection::class, 'create'],
        'taxes'          => [AdjustmentTaxCollection::class, 'create'],
    ];
}