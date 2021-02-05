<?php
namespace Mirakl\MMP\Common\Domain\Order\Tax;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Order\Amount\AmountBreakdown;

/**
 * @method  float               getAmount()
 * @method  $this               setAmount(float $amount)
 * @method  AmountBreakdown     getAmountBreakdown()
 * @method  $this               setAmountBreakdown(AmountBreakdown $amountBreakdown)
 * @method  string              getCode()
 * @method  $this               setCode(string $code)
 * @method  float               getRate()
 * @method  $this               setRate(float $rate)
 * @method  string              getTaxCalculationRule()
 * @method  $this               setTaxCalculationRule(string $taxCalculationRule)
 */
class OrderTaxAmount extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'amount_breakdown' => [AmountBreakdown::class, 'create'],
    ];

    /**
     * @param   float               $amount
     * @param   string              $code
     * @param   AmountBreakdown     $amountBreakdown
     * @param   float               $rate
     * @param   string              $taxCalculationRule
     */
    public function __construct($amount, $code, $amountBreakdown = null, $rate = null, $taxCalculationRule = null)
    {
        parent::__construct();
        $this->setAmount($amount);
        $this->setCode($code);
        $this->setAmountBreakdown($amountBreakdown);
        $this->setRate($rate);
        $this->setTaxCalculationRule($taxCalculationRule);
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
            $data['tax_calculation_rule'] ?? null
        );
    }
}