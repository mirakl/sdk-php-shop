<?php
namespace Mirakl\MMP\Common\Domain\Order\Cancelation;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\EcoContribution\CancelationEcoContributionCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxAmountCollection;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdown;
use Mirakl\MMP\Common\Domain\Order\DiscardPurchaseInformation;

/**
 * @method  float                                 getAmount()
 * @method  $this                                 setAmount(float $amount)
 * @method  AmountBreakdown                       getAmountBreakdown()
 * @method  $this                                 setAmountBreakdown(array|AmountBreakdown $amountBreakdown)
 * @method  string                                getCurrencyIsoCode()
 * @method  $this                                 setCurrencyIsoCode(string $currencyIsoCode)
 * @method  CancelationEcoContributionCollection  getEcoContributions()
 * @method  $this                                 setEcoContributions(array|CancelationEcoContributionCollection $ecoContributions)
 * @method  int                                   getId()
 * @method  $this                                 setId(int $id)
 * @method  int                                   getOrderLineId()
 * @method  $this                                 setOrderLineId(int $orderLineId)
 * @method  DiscardPurchaseInformation            getPurchaseInformation()
 * @method  $this                                 setPurchaseInformation(array|DiscardPurchaseInformation $purchaseInformation)
 * @method  int                                   getQuantity()
 * @method  $this                                 setQuantity(int $qty)
 * @method  string                                getReasonCode()
 * @method  $this                                 setReasonCode(string $amount)
 * @method  float                                 getShippingAmount()
 * @method  $this                                 setShippingAmount(float $shippingAmount)
 * @method  AmountBreakdown                       getShippingAmountBreakdown()
 * @method  $this                                 setShippingAmountBreakdown(array|AmountBreakdown $shippingAmountBreakdown)
 * @method  OrderTaxAmountCollection              getShippingTaxes()
 * @method  $this                                 setShippingTaxes(array|OrderTaxAmountCollection $shippingTaxes)
 * @method  OrderTaxAmountCollection              getTaxes()
 * @method  $this                                 setTaxes(array|OrderTaxAmountCollection $taxes)
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
        'eco_contributions'         => [CancelationEcoContributionCollection::class, 'create'],
        'purchase_information'      => [DiscardPurchaseInformation::class, 'create'],
        'shipping_amount_breakdown' => [AmountBreakdown::class, 'create'],
        'shipping_taxes'            => [OrderTaxAmountCollection::class, 'create'],
        'taxes'                     => [OrderTaxAmountCollection::class, 'create'],
    ];
}
