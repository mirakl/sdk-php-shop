<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\CreatePromotions;

/**
 * @method int   getMaxQuantityToDiscount()
 * @method $this setMaxQuantityToDiscount(int $maxQuantityToDiscount)
 * @method float getPercentageOff()
 * @method $this setPercentageOff(float $percentageOff)
 */
class PercentageOffReward extends Reward
{
    /**
     * @var string
     */
    public static $type = 'PERCENTAGE_OFF';
}
