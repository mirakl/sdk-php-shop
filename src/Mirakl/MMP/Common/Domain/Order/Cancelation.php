<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\CommissionTaxCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\EcoContribution\CancelationEcoContributionCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Fee\CancelationFeeCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxAmountCollection;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdown;

/**
 * @method float                                getAmount()
 * @method $this                                setAmount(float $amount)
 * @method AmountBreakdown                      getAmountBreakdown()
 * @method $this                                setAmountBreakdown(AmountBreakdown|array $amountBreakdown)
 * @method float                                getCommissionAmount()
 * @method $this                                setCommissionAmount(float $commissionAmount)
 * @method CommissionTaxCollection              getCommissionTaxes()
 * @method $this                                setCommissionTaxes(CommissionTaxCollection|array $commissionTaxes)
 * @method bool                                 hasCommissionTaxes()
 * @method float                                getCommissionTotalAmount()
 * @method $this                                setCommissionTotalAmount(float $commissionTotalAmount)
 * @method \DateTime                            getCreatedDate()
 * @method $this                                setCreatedDate(\DateTime $createdDate)
 * @method string                               getCurrencyIsoCode()
 * @method $this                                setCurrencyIsoCode(string $currencyIsoCode)
 * @method \DateTime                            getDateCreated()
 * @method $this                                setDateCreated(\DateTime $dateCreated)
 * @method CancelationEcoContributionCollection getEcoContributions()
 * @method $this                                setEcoContributions(CancelationEcoContributionCollection|array $ecoContributions)
 * @method CancelationFeeCollection             getFees()
 * @method $this                                setFees(CancelationFeeCollection|array $fees)
 * @method string                               getId()
 * @method $this                                setId(string $id)
 * @method string                               getOrderLineId()
 * @method $this                                setOrderLineId(string $orderLineId)
 * @method DiscardPurchaseInformation           getPurchaseInformation()
 * @method $this                                setPurchaseInformation(DiscardPurchaseInformation|array $purchaseInformation)
 * @method int                                  getQuantity()
 * @method $this                                setQuantity(int $quantity)
 * @method string                               getReasonCode()
 * @method $this                                setReasonCode(string $reasonCode)
 * @method float                                getShippingAmount()
 * @method $this                                setShippingAmount(float $shippingAmount)
 * @method AmountBreakdown                      getShippingAmountBreakdown()
 * @method $this                                setShippingAmountBreakdown(AmountBreakdown|array $shippingAmountBreakdown)
 * @method OrderTaxAmountCollection             getShippingTaxes()
 * @method $this                                setShippingTaxes(OrderTaxAmountCollection|array $shippingTaxes)
 * @method OrderTaxAmountCollection             getTaxes()
 * @method $this                                setTaxes(OrderTaxAmountCollection|array $taxes)
 */
class Cancelation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'amount_breakdown'          => [AmountBreakdown::class, 'create'],
        'commission_taxes'          => [CommissionTaxCollection::class, 'create'],
        'eco_contributions'         => [CancelationEcoContributionCollection::class, 'create'],
        'fees'                      => [CancelationFeeCollection::class, 'create'],
        'purchase_information'      => [DiscardPurchaseInformation::class, 'create'],
        'shipping_amount_breakdown' => [AmountBreakdown::class, 'create'],
        'shipping_taxes'            => [OrderTaxAmountCollection::class, 'create'],
        'taxes'                     => [OrderTaxAmountCollection::class, 'create'],
    ];

    /**
     * @param CommissionTax|array $commissionTax
     * @return $this
     */
    public function addCommissionTax($commissionTax)
    {
        if (!$this->hasCommissionTaxes()) {
            return $this->setCommissionTaxes([$commissionTax]);
        }

        $this->getCommissionTaxes()->add($commissionTax);

        return $this;
    }
}
