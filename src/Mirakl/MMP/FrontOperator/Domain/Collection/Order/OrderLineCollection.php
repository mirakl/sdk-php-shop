<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Order\OrderLine;

/**
 * @method  OrderLine   current()
 * @method  OrderLine   first()
 * @method  OrderLine   get($offset)
 * @method  OrderLine   offsetGet($offset)
 * @method  OrderLine   last()
 */
class OrderLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderLine::class;
}