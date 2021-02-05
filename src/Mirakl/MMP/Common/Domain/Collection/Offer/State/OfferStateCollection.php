<?php
namespace Mirakl\MMP\Common\Domain\Collection\Offer\State;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Offer\State\OfferState;

/**
 * @method      OfferState  current()
 * @method      OfferState  first()
 * @method      OfferState  get($offset)
 * @method      OfferState  offsetGet($offset)
 * @method      OfferState  last()
 *
 * @deprecated  Class deprecated since 1.6.0. Use one of the following class
 * @see         \Mirakl\MMP\Front\Domain\Collection\Offer\State\OfferStateCollection
 * @see         \Mirakl\MMP\Operator\Domain\Collection\Offer\State\OfferStateCollection
 * @see         \Mirakl\MMP\Shop\Domain\Collection\Offer\State\OfferStateCollection
 */
class OfferStateCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OfferState::class;
}