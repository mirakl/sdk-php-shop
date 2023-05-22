<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Order\Update;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Order\Update\UpdatedOrderLine;

/**
 * @method  UpdatedOrderLine current()
 * @method  UpdatedOrderLine first()
 * @method  UpdatedOrderLine get($offset)
 * @method  UpdatedOrderLine offsetGet($offset)
 * @method  UpdatedOrderLine last()
 */
class UpdatedOrderLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdatedOrderLine::class;
}