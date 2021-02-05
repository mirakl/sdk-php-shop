<?php
namespace Mirakl\MMP\Common\Domain\Offer\State;

use Mirakl\Core\Domain\MiraklObject;

/**
 * Describe the offer condition
 * Example: New, Used...
 *
 * @method      string  getCode()
 * @method      $this   setCode(string $code)
 * @method      string  getLabel()
 * @method      $this   setLabel(string $label)
 *
 * @deprecated  Class deprecated since 1.6.0. Use a subclass of AbstractOfferState instead
 * @see         \Mirakl\MMP\Common\Domain\Offer\State\AbstractOfferState;
 */
class OfferState extends MiraklObject
{}