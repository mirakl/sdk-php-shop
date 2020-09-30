<?php
namespace Mirakl\MMP\Front\Domain\Collection\Order\Create;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Order\Create\OfferNotShippable;

/**
 * @method  OfferNotShippable   current()
 * @method  OfferNotShippable   first()
 * @method  OfferNotShippable   get($offset)
 * @method  OfferNotShippable   offsetGet($offset)
 * @method  OfferNotShippable   last()
 */
class OfferNotShippableCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OfferNotShippable::class;
}