<?php
namespace Mirakl\MCI\Common\Domain\Collection\Product;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\Product\ProductDataSheetProductFeedValidationStatus;

/**
 * @method ProductDataSheetProductFeedValidationStatus current()
 * @method ProductDataSheetProductFeedValidationStatus first()
 * @method ProductDataSheetProductFeedValidationStatus get($offset)
 * @method ProductDataSheetProductFeedValidationStatus offsetGet($offset)
 * @method ProductDataSheetProductFeedValidationStatus last()
 */
class ProductDataSheetProductFeedValidationStatusCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductDataSheetProductFeedValidationStatus::class;
}