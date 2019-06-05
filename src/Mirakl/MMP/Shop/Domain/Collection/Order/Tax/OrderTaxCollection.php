<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Order\Tax;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Order\Tax\OrderTax;

/**
 * @method  OrderTax    current()
 * @method  OrderTax    first()
 * @method  OrderTax    get($offset)
 * @method  OrderTax    offsetGet($offset)
 * @method  OrderTax    last()
 */
class OrderTaxCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderTax::class;
}