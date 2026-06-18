<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Promotion\CreatePromotions;

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
