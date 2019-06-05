<?php
namespace Mirakl\MMP\Common\Domain\Offer\State;

use Mirakl\Core\Domain\MiraklObject;

/**
 * Describe the offer condition
 * Example: New, Used...
 *
 * @method  string  getCode()
 * @method  $this   setCode(string $code)
 * @method  string  getLabel()
 * @method  $this   setLabel(string $label)
 */
abstract class AbstractOfferState extends MiraklObject
{}