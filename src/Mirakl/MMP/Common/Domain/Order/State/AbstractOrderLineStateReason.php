<?php
namespace Mirakl\MMP\Common\Domain\Order\State;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getCode()
 * @method  $this   setCode(string $code)
 * @method  string  getLabel()
 * @method  $this   setLabel(string $label)
 */
abstract class AbstractOrderLineStateReason extends MiraklObject
{}