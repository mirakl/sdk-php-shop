<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Promotion\UpdatePromotion;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Promotion\UpdatePromotion\ApplicationToCart;

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
