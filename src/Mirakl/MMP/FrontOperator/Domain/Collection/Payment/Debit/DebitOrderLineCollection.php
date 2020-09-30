<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Debit;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Payment\Debit\DebitOrderLine;

/**
 * @method  DebitOrderLine  current()
 * @method  DebitOrderLine  first()
 * @method  DebitOrderLine  get($offset)
 * @method  DebitOrderLine  offsetGet($offset)
 * @method  DebitOrderLine  last()
 */
class DebitOrderLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = DebitOrderLine::class;

    /**
     * @inheritdoc
     */
    public static function create(array $items = [], $totalCount = null)
    {
        return new static($items['order_line'], $totalCount);
    }
}