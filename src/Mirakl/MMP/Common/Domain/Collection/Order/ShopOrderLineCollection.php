<?php
namespace Mirakl\MMP\Common\Domain\Collection\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\ShopOrderLine;

/**
 * @method  ShopOrderLine   current()
 * @method  ShopOrderLine   first()
 * @method  ShopOrderLine   get($offset)
 * @method  ShopOrderLine   offsetGet($offset)
 * @method  ShopOrderLine   last()
 */
class ShopOrderLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShopOrderLine::class;
}