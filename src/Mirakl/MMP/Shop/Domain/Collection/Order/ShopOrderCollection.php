<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Order\ShopOrder;

/**
 * @method  ShopOrder   current()
 * @method  ShopOrder   first()
 * @method  ShopOrder   get($offset)
 * @method  ShopOrder   offsetGet($offset)
 * @method  ShopOrder   last()
 */
class ShopOrderCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShopOrder::class;
}