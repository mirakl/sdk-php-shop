<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Order\Update;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Order\Update\UpdateOrderLine;

/**
 * @method  UpdateOrderLine current()
 * @method  UpdateOrderLine first()
 * @method  UpdateOrderLine get($offset)
 * @method  UpdateOrderLine offsetGet($offset)
 * @method  UpdateOrderLine last()
 */
class UpdateOrderLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdateOrderLine::class;
}