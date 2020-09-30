<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Refund;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Payment\Refund\OrderLineRefund;

/**
 * @method  OrderLineRefund current()
 * @method  OrderLineRefund first()
 * @method  OrderLineRefund get($offset)
 * @method  OrderLineRefund offsetGet($offset)
 * @method  OrderLineRefund last()
 */
class OrderLineRefundCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderLineRefund::class;
}