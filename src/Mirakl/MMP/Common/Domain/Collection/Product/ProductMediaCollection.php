<?php
namespace Mirakl\MMP\Common\Domain\Collection\Product;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Product\ProductMedia;

/**
 * @method  ProductMedia    current()
 * @method  ProductMedia    first()
 * @method  ProductMedia    get($offset)
 * @method  ProductMedia    offsetGet($offset)
 * @method  ProductMedia    last()
 */
class ProductMediaCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductMedia::class;

    /**
     * @inheritdoc
     */
    public function newItem(array $item)
    {
        return ProductMedia::create($item);
    }
}