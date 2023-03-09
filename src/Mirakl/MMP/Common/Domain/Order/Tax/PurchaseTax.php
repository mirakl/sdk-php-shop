<?php
namespace Mirakl\MMP\Common\Domain\Order\Tax;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method float getAmount()
 * @method $this setAmount(float $amount)
 */
class PurchaseTax extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'purchase_amount' => 'amount',
    ];
}