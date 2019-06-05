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
     */
    public function __construct($amount, $code, $amountBreakdown = null)
    {
        parent::__construct();
        $this->setAmount($amount);
        $this->setCode($code);
        $this->setAmountBreakdown($amountBreakdown);
    }

    /**
     * @inheritdoc
     */
    public static function create(array $data = [])
    {
        if (isset($data['amount_breakdown'])) {
            return new static($data['amount'], $data['code'], $data['amount_breakdown']);
        }

        return new static($data['amount'], $data['code']);
    }
}