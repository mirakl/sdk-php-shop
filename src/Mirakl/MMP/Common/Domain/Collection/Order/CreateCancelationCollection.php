<?php
namespace Mirakl\MMP\Common\Domain\Collection\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Order\Cancelation\CreateCancelation;

/**
 * @method  CreateCancelation  current()
 * @method  CreateCancelation  first()
 * @method  CreateCancelation  get($offset)
 * @method  CreateCancelation  offsetGet($offset)
 * @method  CreateCancelation  last()
 */
class CreateCancelationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CreateCancelation::class;
}