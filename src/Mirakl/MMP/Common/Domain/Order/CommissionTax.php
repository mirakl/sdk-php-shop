<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float   getAmount()                 The amount of the tax, computed from its rate
 * @method  $this   setAmount(float $amount)
 * @method  string  getCode()                   The code of the tax
 * @method  $this   setCode(string $code)
 */
class CommissionTax extends MiraklObject
{}