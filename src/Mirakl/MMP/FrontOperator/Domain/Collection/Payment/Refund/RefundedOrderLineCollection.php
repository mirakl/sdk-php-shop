<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Refund;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Payment\Refund\RefundedOrderLine;

/**
 * @method  RefundedOrderLine current()
 * @method  RefundedOrderLine first()
 * @method  RefundedOrderLine get($offset)
 * @method  RefundedOrderLine offsetGet($offset)
 * @method  RefundedOrderLine last()
 */
class RefundedOrderLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = RefundedOrderLine::class;

    /**
     * @param   array       $items
     * @param   int|null    $totalCount
     * @return  $this
     */
    public static function create(array $items = [], $totalCount = null)
    {
        return new static($items['order_line'], $totalCount);
    }
}