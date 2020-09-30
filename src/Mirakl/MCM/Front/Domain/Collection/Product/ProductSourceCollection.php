<?php
namespace Mirakl\MCM\Front\Domain\Collection\Product;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCM\Front\Domain\Product\Export\ProductSource;

/**
 * @method ProductSource current()
 * @method ProductSource first()
 * @method ProductSource get($offset)
 * @method ProductSource offsetGet($offset)
 * @method ProductSource last()
 */
class ProductSourceCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductSource::class;
}
