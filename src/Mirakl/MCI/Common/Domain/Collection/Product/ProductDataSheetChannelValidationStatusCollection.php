<?php
namespace Mirakl\MCI\Common\Domain\Collection\Product;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\Product\ProductDataSheetChannelValidationStatus;

/**
 * @method  ProductDataSheetChannelValidationStatus current()
 * @method  ProductDataSheetChannelValidationStatus first()
 * @method  ProductDataSheetChannelValidationStatus get($offset)
 * @method  ProductDataSheetChannelValidationStatus offsetGet($offset)
 * @method  ProductDataSheetChannelValidationStatus last()
 */
class ProductDataSheetChannelValidationStatusCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductDataSheetChannelValidationStatus::class;
}