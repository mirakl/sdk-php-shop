<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Refund;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Payment\Refund\RefundOrderLine;

/**
 * @method  RefundOrderLine current()
 * @method  RefundOrderLine first()
 * @method  RefundOrderLine get($offset)
 * @method  RefundOrderLine offsetGet($offset)
 * @method  RefundOrderLine last()
 */
class RefundOrderLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = RefundOrderLine::class;

    /**
     * @inheritdoc
     */
    public static function create(array $items = [], $totalCount = null)
    {
        return new static($items['refund'], $totalCount);
    }
}