<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Reward;

use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Reward;

/**
 * @method int   getMaxQuantityToDiscount()
 * @method $this setMaxQuantityToDiscount(int $maxQuantityToDiscount)
 * @method float getReducedUnitPrice()
 * @method $this setReducedUnitPrice(float $reducedUnitPrice)
 */
class ReducedUnitPriceReward extends Reward
{
    /**
     * @var string
     */
    public static $type = 'REDUCED_UNIT_PRICE';
}
