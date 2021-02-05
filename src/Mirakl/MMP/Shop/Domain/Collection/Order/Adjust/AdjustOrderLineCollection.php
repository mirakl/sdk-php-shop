<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Order\Adjust;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Order\Adjust\AdjustOrderLine;

/**
 * @method  AdjustOrderLine current()
 * @method  AdjustOrderLine first()
 * @method  AdjustOrderLine get($offset)
 * @method  AdjustOrderLine offsetGet($offset)
 * @method  AdjustOrderLine last()
 */
class AdjustOrderLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AdjustOrderLine::class;
}