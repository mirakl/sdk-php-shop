<?php
namespace Mirakl\MMP\Common\Domain\Collection\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\OrderLineCommissionTax;

/**
 * @method  OrderLineCommissionTax  current()
 * @method  OrderLineCommissionTax  first()
 * @method  OrderLineCommissionTax  get($offset)
 * @method  OrderLineCommissionTax  offsetGet($offset)
 * @method  OrderLineCommissionTax  last()
 */
class OrderLineCommissionTaxCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderLineCommissionTax::class;
}