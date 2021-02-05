<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\CommissionTaxCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxAmountCollection;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdown;

/**
 * @method  float                       getAmount()
 * @method  $this                       setAmount(float $amount)
 * @method  AmountBreakdown             getAmountBreakdown()
 * @method  $this                       setAmountBreakdown(AmountBreakdown $amountBreakdown)
 * @method  CommissionTaxCollection     getCommissionTaxes()
 * @method  $this                       setCommissionTaxes(array|CommissionTaxCollection $commissionTaxes)
 * @method  bool                        hasCommissionTaxes()
 * @method  float                       getCommissionAmount()
 * @method  $this                       setCommissionAmount(float $commissionAmount)
 * @method  float                       getCommissionTotalAmount()
 * @method  $this                       setCommissionTotalAmount(float $amount)
 * @method  string                      getCurrencyIsoCode()
 * @method  $this                       setCurrencyIsoCode(string $currencyIsoCode)
 * @method  \DateTime                   getCreatedDate()
 * @method  $this                       setCreatedDate(\DateTime $createdDate)
 * @method  \DateTime                   getDateCreated()
 * @method  $this                       setDateCreated(\DateTime $dateCreated)
 * @method  string                      getId()
 * @method  $this                       setId(string $id)
 * @method  string                      getOrderLineId()
 * @method  $this                       setOrderLineId(string $orderLineId)
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
class Cancelation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'amount_breakdown'          => [AmountBreakdown::class, 'create'],
        'commission_taxes'          => [CommissionTaxCollection::class, 'create'],
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
