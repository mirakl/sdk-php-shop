<?php
namespace Mirakl\MMP\Common\Domain\Collection\Order;

use Mirakl\MMP\FrontOperator\Domain\Collection\Order\CreateCancelationCollection as BaseCollection;
use Mirakl\MMP\FrontOperator\Domain\Order\Cancelation\CreateCancelation;

/**
 * @method  CreateCancelation  current()
 * @method  CreateCancelation  first()
 * @method  CreateCancelation  get($offset)
 * @method  CreateCancelation  offsetGet($offset)
 * @method  CreateCancelation  last()
 *
 * @deprecated Use \Mirakl\MMP\FrontOperator\Domain\Collection\Order\CreateCancelationCollection instead
 */
class CreateCancelationCollection extends BaseCollection
{
    /**
     * @var string
     */
    protected $itemClass = CreateCancelation::class;
}