<?php
namespace Mirakl\MMP\Common\Domain\Collection\Adjust;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Adjust\AdjustmentTax;

/**
 * @method  AdjustmentTax   current()
 * @method  AdjustmentTax   first()
 * @method  AdjustmentTax   get($offset)
 * @method  AdjustmentTax   offsetGet($offset)
 * @method  AdjustmentTax   last()
 */
class AdjustmentTaxCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AdjustmentTax::class;
}