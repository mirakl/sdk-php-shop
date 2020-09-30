<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Refund;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Payment\Refund\RefundOrder;

/**
 * @method  RefundOrder current()
 * @method  RefundOrder first()
 * @method  RefundOrder get($offset)
 * @method  RefundOrder offsetGet($offset)
 * @method  RefundOrder last()
 */
class RefundOrderCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = RefundOrder::class;

    /**
     * @inheritdoc
     */
    public static function create(array $items = [], $totalCount = null)
    {
        return new static($items['order_line'], $totalCount);
    }
}