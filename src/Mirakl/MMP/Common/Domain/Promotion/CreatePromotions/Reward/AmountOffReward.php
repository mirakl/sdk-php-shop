<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Reward;

use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Reward;

/**
 * @method float getAmountOff()
 * @method $this setAmountOff(float $amountOff)
 */
class AmountOffReward extends Reward
{
    /**
     * @var string
     */
    public static $type = 'AMOUNT_OFF';
}
