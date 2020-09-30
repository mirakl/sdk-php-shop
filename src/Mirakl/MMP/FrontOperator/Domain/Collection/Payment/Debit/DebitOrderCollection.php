<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Debit;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Payment\Debit\DebitOrder;

/**
 * @method  DebitOrder  current()
 * @method  DebitOrder  first()
 * @method  DebitOrder  get($offset)
 * @method  DebitOrder  offsetGet($offset)
 * @method  DebitOrder  last()
 */
class DebitOrderCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = DebitOrder::class;
}