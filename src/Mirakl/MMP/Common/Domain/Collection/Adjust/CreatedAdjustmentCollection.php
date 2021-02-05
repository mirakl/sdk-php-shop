<?php
namespace Mirakl\MMP\Common\Domain\Collection\Adjust;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Adjust\CreatedAdjustment;

/**
 * @method  CreatedAdjustment   current()
 * @method  CreatedAdjustment   first()
 * @method  CreatedAdjustment   get($offset)
 * @method  CreatedAdjustment   offsetGet($offset)
 * @method  CreatedAdjustment   last()
 */
class CreatedAdjustmentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CreatedAdjustment::class;
}