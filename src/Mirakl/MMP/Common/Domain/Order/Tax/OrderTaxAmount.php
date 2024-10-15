<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order\Tax;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdown;

/**
 * @method float           getAmount()
 * @method $this           setAmount(float $amount)
 * @method AmountBreakdown getAmountBreakdown() @deprecated for OR28 and OR30 requests
 * @method $this           setAmountBreakdown(AmountBreakdown|array $amountBreakdown) @deprecated for OR28 and OR30 requests
 * @method string          getCode()
 * @method $this           setCode(string $code)
 * @method float           getOriginUnitAmount()
 * @method $this           setOriginUnitAmount(float $originUnitAmount)
 * @method PurchaseTax     getPurchaseTax()
 * @method $this           setPurchaseTax(PurchaseTax|array $purchaseTax)
 * @method float           getRate()
 * @method $this           setRate(float $rate)
 * @method string          getTaxCalculationRule()
 * @method $this           setTaxCalculationRule(string $taxCalculationRule)
 */
class OrderTaxAmount extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'amount_breakdown' => [AmountBreakdown::class, 'create'],
        'purchase_tax'     => [PurchaseTax::class, 'create'],
    ];

    /**
     * @param float                      $amount
     * @param string                     $code
     * @param AmountBreakdown|array|null $amountBreakdown
     * @param float|null                 $rate
     * @param string|null                $taxCalculationRule
     * @param float|null                 $originUnitAmount
     * @param PurchaseTax|array|null     $purchaseTax
     */
    public function __construct(
        $amount,
        $code,
        $amountBreakdown = null,
        $rate = null,
        $taxCalculationRule = null,
        $originUnitAmount = null,
        $purchaseTax = null
    ) {
        parent::__construct();
        $this->setAmount($amount);
        $this->setCode($code);
        if (null !== $amountBreakdown) {
            $this->setAmountBreakdown($amountBreakdown);
        }
        if (null !== $rate) {
            $this->setRate($rate);
        }
        if (null !== $taxCalculationRule) {
            $this->setTaxCalculationRule($taxCalculationRule);
        }
        if (null !== $originUnitAmount) {
            $this->setOriginUnitAmount($originUnitAmount);
        }
        if (null !== $purchaseTax) {
            $this->setPurchaseTax($purchaseTax);
        }
    }

    /**
     * @inheritdoc
     */
    public static function create(array $data = [])
    {
        return new static(
            $data['amount'],
            $data['code'],
            $data['amount_breakdown'] ?? null,
            $data['rate'] ?? null,
            $data['tax_calculation_rule'] ?? null,
            $data['origin_unit_amount'] ?? null,
            $data['purchase_tax'] ?? null
        );
    }
}
