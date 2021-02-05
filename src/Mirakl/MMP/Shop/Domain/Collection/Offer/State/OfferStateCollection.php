<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Offer\State;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Offer\State\OfferState;

/**
 * @method  OfferState  current()
 * @method  OfferState  first()
 * @method  OfferState  get($offset)
 * @method  OfferState  offsetGet($offset)
 * @method  OfferState  last()
 */
class OfferStateCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OfferState::class;
}