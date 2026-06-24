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
 * @method $this                                setAmountBreakdown(array|AmountBreakdown $amountBreakdown)
 * @method float                                getCommissionAmount()
 * @method $this                                setCommissionAmount(float $commissionAmount)
 * @method CommissionTaxCollection              getCommissionTaxes()
 * @method bool                                 hasCommissionTaxes()
 * @method $this                                setCommissionTaxes(array|CommissionTaxCollection $commissionTaxes)
 * @method float                                getCommissionTotalAmount()
 * @method $this                                setCommissionTotalAmount(float $commissionTotalAmount)
 * @method \DateTime                            getCreatedDate()
 * @method $this                                setCreatedDate(\DateTime $createdDate)
 * @method string                               getCurrencyIsoCode()
 * @method $this                                setCurrencyIsoCode(string $currencyIsoCode)
 * @method \DateTime                            getDateCreated()
 * @method $this                                setDateCreated(\DateTime $dateCreated)
 * @method CancelationEcoContributionCollection getEcoContributions()
 * @method $this                                setEcoContributions(array|CancelationEcoContributionCollection $ecoContributions)
 * @method CancelationFeeCollection             getFees()
 * @method $this                                setFees(array|CancelationFeeCollection $fees)
 * @method Funding                              getFunding()
 * @method $this                                setFunding(array|Funding $funding)
 * @method string                               getId()
 * @method $this                                setId(string $id)
 * @method string                               getOrderLineId()
 * @method $this                                setOrderLineId(string $orderLineId)
 * @method DiscardPurchaseInformation           getPurchaseInformation()
 * @method $this                                setPurchaseInformation(array|DiscardPurchaseInformation $purchaseInformation)
 * @method int                                  getQuantity()
 * @method $this                                setQuantity(int $quantity)
 * @method string                               getReasonCode()
 * @method $this                                setReasonCode(string $reasonCode)
 * @method float                                getShippingAmount()
 * @method $this                                setShippingAmount(float $shippingAmount)
 * @method AmountBreakdown                      getShippingAmountBreakdown()
 * @method $this                                setShippingAmountBreakdown(array|AmountBreakdown $shippingAmountBreakdown)
 * @method OrderTaxAmountCollection             getShippingTaxes()
 * @method $this                                setShippingTaxes(array|OrderTaxAmountCollection $shippingTaxes)
 * @method OrderTaxAmountCollection             getTaxes()
 * @method $this                                setTaxes(array|OrderTaxAmountCollection $taxes)
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
        'funding'                   => [Funding::class, 'create'],
        'purchase_information'      => [DiscardPurchaseInformation::class, 'create'],
        'shipping_amount_breakdown' => [AmountBreakdown::class, 'create'],
        'shipping_taxes'            => [OrderTaxAmountCollection::class, 'create'],
        'taxes'                     => [OrderTaxAmountCollection::class, 'create'],
    ];

    /**
     * @param array|CommissionTax $commissionTax
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
