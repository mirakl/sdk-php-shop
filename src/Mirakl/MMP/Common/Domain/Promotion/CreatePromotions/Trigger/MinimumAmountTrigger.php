<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Trigger;

use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Trigger;

/**
 * @method float getAmountPurchased()
 * @method $this setAmountPurchased(float $amountPurchased)
 */
class MinimumAmountTrigger extends Trigger
{
    /**
     * @var string
     */
    public static $type = 'MINIMUM_AMOUNT';
}
