<?php
namespace Mirakl\MMP\Common\Domain\Order\Tax;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getCode()
 * @method  $this   setCode(string $code)
 * @method  string  getLabel()
 * @method  $this   setLabel(string $label)
 * @method  string  getTaxCalculationRule()
 * @method  $this   setTaxCalculationRule(string $taxCalculationRule)
 */
abstract class AbstractOrderTax extends MiraklObject
{}