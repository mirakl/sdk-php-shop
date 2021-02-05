<?php
namespace Mirakl\MMP\Common\Domain\Collection\Product\Offer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Product\Offer\OfferOnProduct;

/**
 * @method  OfferOnProduct  current()
 * @method  OfferOnProduct  first()
 * @method  OfferOnProduct  get($offset)
 * @method  OfferOnProduct  offsetGet($offset)
 * @method  OfferOnProduct  last()
 *
 * @deprecated Use FrontOperator or Shop class instead
 * @see \Mirakl\MMP\FrontOperator\Domain\Collection\Product\Offer\OfferOnProductCollection
 * @see \Mirakl\MMP\Shop\Domain\Collection\Product\Offer\OfferOnProductCollection
 */
class OfferOnProductCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OfferOnProduct::class;
}