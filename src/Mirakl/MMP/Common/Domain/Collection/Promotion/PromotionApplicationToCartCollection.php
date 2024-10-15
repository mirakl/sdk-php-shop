<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Promotion;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Promotion\PromotionApplicationToCart;

/**
 * @method PromotionApplicationToCart current()
 * @method PromotionApplicationToCart first()
 * @method PromotionApplicationToCart get($offset)
 * @method PromotionApplicationToCart offsetGet($offset)
 * @method PromotionApplicationToCart last()
 */
class PromotionApplicationToCartCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = PromotionApplicationToCart::class;
}
