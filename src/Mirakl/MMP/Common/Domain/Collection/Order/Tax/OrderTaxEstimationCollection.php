<?php
namespace Mirakl\MMP\Common\Domain\Collection\Order\Tax;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Order\Tax\OrderTaxEstimation;

/**
 * @method  OrderTaxEstimation  current()
 * @method  OrderTaxEstimation  first()
 * @method  OrderTaxEstimation  get($offset)
 * @method  OrderTaxEstimation  offsetGet($offset)
 * @method  OrderTaxEstimation  last()
 */
class OrderTaxEstimationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderTaxEstimation::class;

    /**
     * @inheritdoc
     */
    public function newItem(array $item)
    {
        return OrderTaxEstimation::create($item);
    }
}