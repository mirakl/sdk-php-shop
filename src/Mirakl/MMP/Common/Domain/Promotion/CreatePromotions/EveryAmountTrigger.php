<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\CreatePromotions;

/**
 * @method float getAmountPurchased()
 * @method $this setAmountPurchased(float $amountPurchased)
 */
class EveryAmountTrigger extends Trigger
{
    /**
     * @var string
     */
    public static $type = 'EVERY_AMOUNT';
}
