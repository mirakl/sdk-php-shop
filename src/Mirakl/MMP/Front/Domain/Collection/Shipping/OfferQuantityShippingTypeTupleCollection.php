<?php
namespace Mirakl\MMP\Front\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Shipping\OfferQuantityShippingTypeTuple;

/**
 * @method  OfferQuantityShippingTypeTuple  current()
 * @method  OfferQuantityShippingTypeTuple  first()
 * @method  OfferQuantityShippingTypeTuple  get($offset)
 * @method  OfferQuantityShippingTypeTuple  offsetGet($offset)
 * @method  OfferQuantityShippingTypeTuple  last()
 */
class OfferQuantityShippingTypeTupleCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OfferQuantityShippingTypeTuple::class;
}