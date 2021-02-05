<?php
namespace Mirakl\MMP\Common\Domain\Adjust;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getOrderLineId()
 * @method  $this   setOrderLineId(string $orderLineId)
 * @method  float   getActualMeasurement()
 * @method  $this   setActualMeasurement(float $actualMeasurement)
 */
abstract class AbstractAdjustOrderLine extends MiraklObject
{}