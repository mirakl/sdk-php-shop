<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order\Tax;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method float getAmount()
 * @method $this setAmount(float $amount)
 * @method float getRate()
 * @method $this setRate(float $rate)
 */
class PurchaseTax extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'purchase_amount' => 'amount',
        'purchase_rate'   => 'rate',
    ];
}
