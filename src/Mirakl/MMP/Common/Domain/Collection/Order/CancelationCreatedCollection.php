<?php
namespace Mirakl\MMP\Common\Domain\Collection\Order;

use Mirakl\MMP\FrontOperator\Domain\Collection\Order\CancelationCreatedCollection as BaseCollection;
use Mirakl\MMP\FrontOperator\Domain\Order\Cancelation\CancelationCreated;

/**
 * @method  CancelationCreated  current()
 * @method  CancelationCreated  first()
 * @method  CancelationCreated  get($offset)
 * @method  CancelationCreated  offsetGet($offset)
 * @method  CancelationCreated  last()
 *
 * @deprecated Use \Mirakl\MMP\FrontOperator\Domain\Collection\Order\CancelationCreatedCollection instead
 */
class CancelationCreatedCollection extends BaseCollection
{
    /**
     * @var string
     */
    protected $itemClass = CancelationCreated::class;
}