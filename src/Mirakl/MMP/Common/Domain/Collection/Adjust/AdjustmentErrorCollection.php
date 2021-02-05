<?php
namespace Mirakl\MMP\Common\Domain\Collection\Adjust;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Adjust\AdjustmentError;

/**
 * @method  AdjustmentError   current()
 * @method  AdjustmentError   first()
 * @method  AdjustmentError   get($offset)
 * @method  AdjustmentError   offsetGet($offset)
 * @method  AdjustmentError   last()
 */
class AdjustmentErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AdjustmentError::class;
}