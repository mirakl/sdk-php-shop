<?php
namespace Mirakl\MMP\Common\Domain\Adjust;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Adjust\AdjustmentTaxCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\EcoContribution\CancelationEcoContributionCollection;

/**
 * @method  float                                 getAmount()
 * @method  $this                                 setAmount(float $amount)
 * @method  string                                getCurrencyIsoCode()
 * @method  $this                                 setCurrencyIsoCode(string $currencyIsoCode)
 * @method  CancelationEcoContributionCollection  getEcoContributions()
 * @method  $this                                 setEcoContributions(array|CancelationEcoContributionCollection $ecoContributions)
 * @method  int                                   getQuantity()
 * @method  $this                                 setQuantity(int $quantity)
 * @method  string                                getReasonCode()
 * @method  $this                                 setReasonCode(string $reasonCode)
 * @method  float                                 getShippingAmount()
 * @method  $this                                 setShippingAmount(float $shippingAmount)
 * @method  AdjustmentTaxCollection               getShippingTaxes()
 * @method  $this                                 setShippingTaxes(AdjustmentTaxCollection|array $shippingTaxes)
 * @method  AdjustmentTaxCollection               getTaxes()
 * @method  $this                                 setTaxes(AdjustmentTaxCollection|array $taxes)
 */
class AdjustmentCancelation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'eco_contributions' => [CancelationEcoContributionCollection::class, 'create'],
        'shipping_taxes'    => [AdjustmentTaxCollection::class, 'create'],
        'taxes'             => [AdjustmentTaxCollection::class, 'create'],
    ];
}