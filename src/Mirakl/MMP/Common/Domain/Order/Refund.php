<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\CommissionTaxCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\EcoContribution\RefundEcoContributionCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxAmountCollection;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdown;

/**
 * @method  float                            getAmount()
 * @method  $this                            setAmount(float $amount)
 * @method  AmountBreakdown                  getAmountBreakdown()
 * @method  $this                            setAmountBreakdown(array|AmountBreakdown $amountBreakdown)
 * @method  float                            getCommissionAmount()
 * @method  $this                            setCommissionAmount(float $amount)
 * @method  float                            getCommissionTaxAmount()
 * @method  $this                            setCommissionTaxAmount(float $amount)
 * @method  CommissionTaxCollection          getCommissionTaxes()
 * @method  $this                            setCommissionTaxes(array|CommissionTaxCollection $commissionTaxes)
 * @method  bool                             hasCommissionTaxes()
 * @method  float                            getCommissionTotalAmount()
 * @method  $this                            setCommissionTotalAmount(float $amount)
 * @method  \DateTime                        getDateCreated()
 * @method  $this                            setDateCreated(\DateTime $dateCreated)
 * @method  RefundEcoContributionCollection  getEcoContributions()
 * @method  $this                            setEcoContributions(array|RefundEcoContributionCollection $ecoContributions)
 * @method  string                           getId()
 * @method  $this                            setId(string $id)
 * @method  DiscardPurchaseInformation       getPurchaseInformation()
 * @method  $this                            setPurchaseInformation(array|DiscardPurchaseInformation $purchaseInformation)
 * @method  int                              getQuantity()
 * @method  $this                            setQuantity(int $qty)
 * @method  string                           getReasonCode()
 * @method  $this                            setReasonCode(string $reasonCode)
 * @method  string                           getRefundState()
 * @method  $this                            setRefundState(string $refundState)
 * @method  float                            getShippingAmount()
 * @method  $this                            setShippingAmount(float $amount)
 * @method  AmountBreakdown                  getShippingAmountBreakdown()
 * @method  $this                            setShippingAmountBreakdown(array|AmountBreakdown $shippingAmountBreakdown)
 * @method  OrderTaxAmountCollection         getShippingTaxes()
 * @method  $this                            setShippingTaxes(array|OrderTaxAmountCollection $shippingTaxes)
 * @method  string                           getState()
 * @method  $this                            setState(string $state)
 * @method  OrderTaxAmountCollection         getTaxes()
 * @method  $this                            setTaxes(array|OrderTaxAmountCollection $taxes)
 * @method  \DateTime                        getTransactionDate()
 * @method  string                           getTransactionNumber()
 * @method  $this                            setTransactionNumber(string $number)
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
        'purchase_information'      => [DiscardPurchaseInformation::class, 'create'],
        'shipping_amount_breakdown' => [AmountBreakdown::class, 'create'],
        'shipping_taxes'            => [OrderTaxAmountCollection::class, 'create'],
        'taxes'                     => [OrderTaxAmountCollection::class, 'create'],
    ];

    /**
     * @param   mixed   $commissionTax
     * @return  $this
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