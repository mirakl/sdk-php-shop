<?php
namespace Mirakl\MCM\Front\Domain\Collection\Product;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCM\Front\Domain\Product\Export\ProductExport;

/**
 * @method ProductExport current()
 * @method ProductExport first()
 * @method ProductExport get($offset)
 * @method ProductExport offsetGet($offset)
 * @method ProductExport last()
 */
class ProductExportCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductExport::class;
}