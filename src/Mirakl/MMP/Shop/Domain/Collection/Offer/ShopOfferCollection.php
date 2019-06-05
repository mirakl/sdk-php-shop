<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Offer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Offer\ShopOffer;

/**
 * @method  ShopOffer   current()
 * @method  ShopOffer   first()
 * @method  ShopOffer   get($offset)
 * @method  ShopOffer   offsetGet($offset)
 * @method  ShopOffer   last()
 */
class ShopOfferCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShopOffer::class;
}