<?php
namespace Mirakl\MCI\Common\Domain\Collection\Product;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\Product\ProductImportResult;

/**
 * @method  ProductImportResult current()
 * @method  ProductImportResult first()
 * @method  ProductImportResult get($offset)
 * @method  ProductImportResult offsetGet($offset)
 * @method  ProductImportResult last()
 */
class ProductImportResultCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductImportResult::class;
}