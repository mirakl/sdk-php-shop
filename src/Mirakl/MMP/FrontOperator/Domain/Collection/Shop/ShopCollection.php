<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Shop;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Shop;

/**
 * @method  Shop    current()
 * @method  Shop    first()
 * @method  Shop    get($offset)
 * @method  Shop    offsetGet($offset)
 * @method  Shop    last()
 */
class ShopCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Shop::class;
}