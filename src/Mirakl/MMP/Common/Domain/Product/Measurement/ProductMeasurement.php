<?php
namespace Mirakl\MMP\Common\Domain\Product\Measurement;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float   getTotalMeasurementOfProduct()
 * @method  $this   setTotalMeasurementOfProduct(float $totalMeasurementOfProduct)
 * @method  string  getUnit()
 * @method  $this   setUnit(string $unit)
 */
class ProductMeasurement extends MiraklObject
{
    const UNIT_SEPARATOR = ',';
    const QUANTITY_SEPARATOR = '|';
}