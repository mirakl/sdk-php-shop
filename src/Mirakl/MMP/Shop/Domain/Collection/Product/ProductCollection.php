<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Product;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Product;

/**
 * @method  Product current()
 * @method  Product first()
 * @method  Product get($offset)
 * @method  Product offsetGet($offset)
 * @method  Product last()
 */
class ProductCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Product::class;
}