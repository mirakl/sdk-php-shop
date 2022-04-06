<?php
namespace Mirakl\MMP\Common\Domain\Collection\Product\Measurement;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Product\Measurement\ProductMeasurement;

/**
 * @method  ProductMeasurement    current()
 * @method  ProductMeasurement    first()
 * @method  ProductMeasurement    get($offset)
 * @method  ProductMeasurement    offsetGet($offset)
 * @method  ProductMeasurement    last()
 */
class ProductMeasurementCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ProductMeasurement::class;
}