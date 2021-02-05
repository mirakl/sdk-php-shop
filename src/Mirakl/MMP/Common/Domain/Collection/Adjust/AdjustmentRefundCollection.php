<?php
namespace Mirakl\MMP\Common\Domain\Collection\Adjust;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Adjust\AdjustmentRefund;

/**
 * @method  AdjustmentRefund   current()
 * @method  AdjustmentRefund   first()
 * @method  AdjustmentRefund   get($offset)
 * @method  AdjustmentRefund   offsetGet($offset)
 * @method  AdjustmentRefund   last()
 */
class AdjustmentRefundCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AdjustmentRefund::class;
}