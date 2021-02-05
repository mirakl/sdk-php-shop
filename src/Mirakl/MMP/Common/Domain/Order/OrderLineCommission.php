<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\OrderLineCommissionTaxCollection;

/**
 * @method  OrderLineCommissionTaxCollection    getCommissionTaxes()
 * @method  $this                               setCommissionTaxes(array|OrderLineCommissionTaxCollection $commissionTaxes)
 * @method  bool                                hasCommissionTaxes()
 * @method  float                               getFee()
 * @method  $this                               setFee(float $fee)
 * @method  float                               getTotal()
 * @method  $this                               setTotal(float $total)
 */
class OrderLineCommission extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'commission_fee'   => 'fee',
        'total_commission' => 'total',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'commission_taxes' => [OrderLineCommissionTaxCollection::class, 'create'],
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