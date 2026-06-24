<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Reward;

use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Reward;

/**
 * @method int   getFreeItemsQuantity()
 * @method $this setFreeItemsQuantity(int $freeItemsQuantity)
 */
class FreeItemsReward extends Reward
{
    /**
     * @var string
     */
    public static $type = 'FREE_ITEMS';
}
