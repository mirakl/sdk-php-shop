<?php
namespace Mirakl\MMP\Common\Domain\Order\Amount;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float   getAmount()
 * @method  $this   setAmount(float $amount)
 * @method  bool    isCommissionable()
 * @method  bool    getCommissionable()
 * @method  $this   setCommissionable(bool $commissionable)
 * @method  bool    isDebitableFromCustomer()
 * @method  bool    getDebitableFromCustomer()
 * @method  $this   setDebitableFromCustomer(bool $debitableFromCustomer)
 * @method  bool    isPayableToShop()
 * @method  bool    getPayableToShop()
 * @method  $this   setPayableToShop(bool $payableToShop)
 */
class AmountBreakdownPart extends MiraklObject
{
    /**
     * @param  float   $amount
     * @param  bool    $isDebitableFromCustomer
     * @param  bool    $isCommissionable
     * @param  bool    $isPayableToShop
     */
    public function __construct($amount, $isDebitableFromCustomer = true, $isCommissionable = true, $isPayableToShop = true)
    {
        parent::__construct();
        $this->setAmount($amount);
        $this->setCommissionable($isCommissionable);
        $this->setDebitableFromCustomer($isDebitableFromCustomer);
        $this->setPayableToShop($isPayableToShop);
    }

    /**
     * @inheritdoc
     */
    public static function create(array $data = [])
    {
        return new static($data['amount'], $data['debitable_from_customer'], $data['commissionable'], $data['payable_to_shop']);
    }
}