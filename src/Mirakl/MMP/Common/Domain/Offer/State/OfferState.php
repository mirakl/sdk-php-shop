<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Offer\State;

use Mirakl\Core\Domain\MiraklObject;

/**
 * Describe the offer condition
 * Example: New, Used...
 *
 *
 * @deprecated Class deprecated since 1.6.0. Use a subclass of AbstractOfferState instead
 * @see \Mirakl\MMP\Common\Domain\Offer\State\AbstractOfferState;
 *
 * @method bool   getActive()
 * @method bool   isActive()
 * @method $this  setActive(bool $active)
 * @method string getCode()
 * @method $this  setCode(string $code)
 * @method string getLabel()
 * @method $this  setLabel(string $label)
 */
class OfferState extends MiraklObject
{
}
