<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Product\Offer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Product\Offer\ProductWithOffers;

/**
 * @method ProductWithOffers current()
 * @method ProductWithOffers first()
 * @method ProductWithOffers get($offset)
 * @method ProductWithOffers offsetGet($offset)
 * @method ProductWithOffers last()
 *
 * @deprecated Use one of below classes instead based on your role (FrontOperator or Shop)
 * @see \Mirakl\MMP\FrontOperator\Domain\Collection\Product\Offer\ProductWithOffersCollection
 * @see \Mirakl\MMP\Shop\Domain\Collection\Product\Offer\ProductWithOffersCollection
 */
class ProductWithOffersCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductWithOffers::class;
}
