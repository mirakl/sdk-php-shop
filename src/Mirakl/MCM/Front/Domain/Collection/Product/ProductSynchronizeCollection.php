<?php
namespace Mirakl\MCM\Front\Domain\Collection\Product;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCM\Front\Domain\Product\Synchronization\ProductSynchronization;

/**
 * @method  ProductSynchronization    current()
 * @method  ProductSynchronization    first()
 * @method  ProductSynchronization    get($offset)
 * @method  ProductSynchronization    offsetGet($offset)
 * @method  ProductSynchronization    last()
 */
class ProductSynchronizeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductSynchronization::class;
}