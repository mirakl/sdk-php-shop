<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\CommissionTaxCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\EcoContribution\RefundEcoContributionCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Fee\RefundFeeCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxAmountCollection;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdown;

/**
 * @method float                           getAmount()
 * @method $this                           setAmount(float $amount)
 * @method AmountBreakdown                 getAmountBreakdown()
 * @method $this                           setAmountBreakdown(AmountBreakdown|array $amountBreakdown)
 * @method float                           getCommissionAmount()
 * @method $this                           setCommissionAmount(float $commissionAmount)
 * @method float                           getCommissionTaxAmount()
 * @method $this                           setCommissionTaxAmount(float $commissionTaxAmount)
 * @method CommissionTaxCollection         getCommissionTaxes()
 * @method $this                           setCommissionTaxes(CommissionTaxCollection|array $commissionTaxes)
 * @method float                           getCommissionTotalAmount()
 * @method $this                           setCommissionTotalAmount(float $commissionTotalAmount)
 * @method bool                            hasCommissionTaxes()
 * @method \DateTime                       getDateCreated()
 * @method $this                           setDateCreated(\DateTime $dateCreated)
 * @method RefundEcoContributionCollection getEcoContributions()
 * @method $this                           setEcoContributions(RefundEcoContributionCollection|array $ecoContributions)
 * @method RefundFeeCollection             getFees()
 * @method $this                           setFees(RefundFeeCollection|array $fees)
 * @method string                          getId()
 * @method $this                           setId(string $id)
 * @method DiscardPurchaseInformation      getPurchaseInformation()
 * @method $this                           setPurchaseInformation(DiscardPurchaseInformation|array $purchaseInformation)
 * @method int                             getQuantity()
 * @method $this                           setQuantity(int $quantity)
 * @method string                          getReasonCode()
 * @method $this                           setReasonCode(string $reasonCode)
 * @method string                          getRefundState()
 * @method $this                           setRefundState(string $refundState)
 * @method float                           getShippingAmount()
 * @method $this                           setShippingAmount(float $shippingAmount)
 * @method AmountBreakdown                 getShippingAmountBreakdown()
 * @method $this                           setShippingAmountBreakdown(AmountBreakdown|array $shippingAmountBreakdown)
 * @method OrderTaxAmountCollection        getShippingTaxes()
 * @method $this                           setShippingTaxes(OrderTaxAmountCollection|array $shippingTaxes)
 * @method string                          getState()
 * @method $this                           setState(string $state)
 * @method string                          getTaxLegalNotice()
 * @method $this                           setTaxLegalNotice(string $taxLegalNotice)
 * @method OrderTaxAmountCollection        getTaxes()
 * @method $this                           setTaxes(OrderTaxAmountCollection|array $taxes)
 * @method \DateTime                       getTransactionDate()
 * @method $this                           setTransactionDate(\DateTime $transactionDate)
 * @method string                          getTransactionNumber()
 * @method $this                           setTransactionNumber(string $transactionNumber)
 */
class Refund extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'created_date' => 'date_created',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'amount_breakdown'          => [AmountBreakdown::class, 'create'],
        'commission_taxes'          => [CommissionTaxCollection::class, 'create'],
        'eco_contributions'         => [RefundEcoContributionCollection::class, 'create'],
        'fees'                      => [RefundFeeCollection::class, 'create'],
        'purchase_information'      => [DiscardPurchaseInformation::class, 'create'],
        'shipping_amount_breakdown' => [AmountBreakdown::class, 'create'],
        'shipping_taxes'            => [OrderTaxAmountCollection::class, 'create'],
        'taxes'                     => [OrderTaxAmountCollection::class, 'create'],
    ];

    /**
     * @param mixed $commissionTax
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
