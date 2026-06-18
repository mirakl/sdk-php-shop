<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Promotion\CreatePromotions;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Promotion\CreatePromotions\ApplicationToCart;

/**
 * @method ApplicationToCart current()
 * @method ApplicationToCart first()
 * @method ApplicationToCart get($offset)
 * @method ApplicationToCart last()
 * @method ApplicationToCart offsetGet($offset)
 */
class ApplicationToCartCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ApplicationToCart::class;
}
