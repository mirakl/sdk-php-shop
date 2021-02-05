<?php
namespace Mirakl\MMP\Common\Domain\Collection\Adjust;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Adjust\AdjustmentCancelation;

/**
 * @method  AdjustmentCancelation   current()
 * @method  AdjustmentCancelation   first()
 * @method  AdjustmentCancelation   get($offset)
 * @method  AdjustmentCancelation   offsetGet($offset)
 * @method  AdjustmentCancelation   last()
 */
class AdjustmentCancelationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AdjustmentCancelation::class;
}