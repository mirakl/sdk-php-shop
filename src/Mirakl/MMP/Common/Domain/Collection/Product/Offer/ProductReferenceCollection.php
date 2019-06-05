<?php
namespace Mirakl\MMP\Common\Domain\Collection\Product\Offer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Product\Offer\ProductReference;

/**
 * @method  ProductReference    current()
 * @method  ProductReference    first()
 * @method  ProductReference    get($offset)
 * @method  ProductReference    offsetGet($offset)
 * @method  ProductReference    last()
 */
class ProductReferenceCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductReference::class;

    /**
     * @inheritdoc
     */
    public function newItem(array $item)
    {
        return ProductReference::create($item);
    }
}