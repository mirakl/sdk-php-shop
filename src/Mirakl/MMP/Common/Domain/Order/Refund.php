<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\CommissionTaxCollection;
use Mirakl\MMP\Common\Domain\Collection\Order\Tax\OrderTaxAmountCollection;

/**
 * @method  float                       getAmount()
 * @method  $this                       setAmount(float $amount)
 * @method  float                       getCommissionAmount()
 * @method  $this                       setCommissionAmount(float $amount)
 * @method  CommissionTaxCollection     getCommissionTaxes()
 * @method  $this                       setCommissionTaxes(array|CommissionTaxCollection $commissionTaxes)
 * @method  bool                        hasCommissionTaxes()
 * @method  float                       getCommissionTotalAmount()
 * @method  $this                       setCommissionTotalAmount(float $amount)
 * @method  \DateTime                   getDateCreated()
 * @method  $this                       setDateCreated(\DateTime $dateCreated)
 * @method  string                      getId()
 * @method  $this                       setId(string $id)
 * @method  int                         getQuantity()
 * @method  $this                       setQuantity(int $qty)
 * @method  string                      getReasonCode()
 * @method  $this                       setReasonCode(string $reasonCode)
 * @method  float                       getShippingAmount()
 * @method  $this                       setShippingAmount(float $amount)
 * @method  OrderTaxAmountCollection    getShippingTaxes()
 * @method  $this                       setShippingTaxes(array|OrderTaxAmountCollection $shippingTaxes)
 * @method  string                      getState()
 * @method  $this                       setState(string $state)
 * @method  OrderTaxAmountCollection    getTaxes()
 * @method  $this                       setTaxes(array|OrderTaxAmountCollection $taxes)
 * @method  \DateTime                   getTransactionDate()
 * @method  string                      getTransactionNumber()
 * @method  $this                       setTransactionNumber(string $number)
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
        'commission_taxes' => [CommissionTaxCollection::class, 'create'],
        'shipping_taxes'   => [OrderTaxAmountCollection::class, 'create'],
        'taxes'            => [OrderTaxAmountCollection::class, 'create'],
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