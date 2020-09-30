<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Order;

/**
 * @method  Order   current()
 * @method  Order   first()
 * @method  Order   get($offset)
 * @method  Order   offsetGet($offset)
 * @method  Order   last()
 */
class OrderCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Order::class;
}