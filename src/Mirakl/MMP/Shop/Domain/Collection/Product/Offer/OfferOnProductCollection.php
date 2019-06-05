<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Product\Offer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Product\Offer\OfferOnProduct;

/**
 * @method  OfferOnProduct  current()
 * @method  OfferOnProduct  first()
 * @method  OfferOnProduct  get($offset)
 * @method  OfferOnProduct  offsetGet($offset)
 * @method  OfferOnProduct  last()
 */
class OfferOnProductCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OfferOnProduct::class;
}