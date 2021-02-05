<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Product\Offer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Product\Offer\ProductWithOffers;

/**
 * @method  ProductWithOffers   current()
 * @method  ProductWithOffers   first()
 * @method  ProductWithOffers   get($offset)
 * @method  ProductWithOffers   offsetGet($offset)
 * @method  ProductWithOffers   last()
 */
class ProductWithOffersCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductWithOffers::class;
}