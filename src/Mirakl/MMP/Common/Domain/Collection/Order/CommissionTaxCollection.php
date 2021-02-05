<?php
namespace Mirakl\MMP\Common\Domain\Collection\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\CommissionTax;

/**
 * @method  CommissionTax   current()
 * @method  CommissionTax   first()
 * @method  CommissionTax   get($offset)
 * @method  CommissionTax   offsetGet($offset)
 * @method  CommissionTax   last()
 */
class CommissionTaxCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CommissionTax::class;
}