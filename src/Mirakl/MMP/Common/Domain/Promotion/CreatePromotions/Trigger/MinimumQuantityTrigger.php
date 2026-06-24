<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Trigger;

use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\Trigger;

/**
 * @method int   getQuantityPurchased()
 * @method $this setQuantityPurchased(int $quantityPurchased)
 * @method bool  getSameItemPurchased()
 * @method bool  isSameItemPurchased()
 * @method $this setSameItemPurchased(bool $sameItemPurchased)
 */
class MinimumQuantityTrigger extends Trigger
{
    /**
     * @var string
     */
    public static $type = 'MINIMUM_QUANTITY';
}
