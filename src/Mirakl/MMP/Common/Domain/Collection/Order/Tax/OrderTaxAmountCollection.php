<?php
namespace Mirakl\MMP\Common\Domain\Collection\Order\Tax;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\Tax\OrderTaxAmount;

/**
 * @method  OrderTaxAmount  current()
 * @method  OrderTaxAmount  first()
 * @method  OrderTaxAmount  get($offset)
 * @method  OrderTaxAmount  offsetGet($offset)
 * @method  OrderTaxAmount  last()
 */
class OrderTaxAmountCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderTaxAmount::class;

    /**
     * @inheritdoc
     */
    public function newItem(array $item)
    {
        return OrderTaxAmount::create($item);
    }
}