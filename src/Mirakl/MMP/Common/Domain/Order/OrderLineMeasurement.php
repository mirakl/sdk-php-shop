<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float   getActualMeasurement()
 * @method  $this   setActualMeasurement(float $actualMeasurement)
 * @method  float   getAdjustmentLimit()
 * @method  $this   setAdjustmentLimit(float $adjustmentLimit)
 * @method  string  getMeasurementUnit()
 * @method  $this   setMeasurementUnit(string $measurementUnit)
 * @method  float   getOrderedMeasurement()
 * @method  $this   setOrderedMeasurement(float $orderedMeasurement)
 */
class OrderLineMeasurement extends MiraklObject
{}