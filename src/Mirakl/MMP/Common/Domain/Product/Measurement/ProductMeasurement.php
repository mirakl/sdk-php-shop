<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Product\Measurement;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method float  getTotalMeasurementOfProduct()
 * @method $this  setTotalMeasurementOfProduct(float $totalMeasurementOfProduct)
 * @method string getUnit()
 * @method $this  setUnit(string $unit)
 */
class ProductMeasurement extends MiraklObject
{
    public const UNIT_SEPARATOR = ',';
    public const QUANTITY_SEPARATOR = '|';
}
