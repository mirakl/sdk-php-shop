<?php
namespace Mirakl\MMP\Front\Domain\Collection\Quote\Create;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Quote\Create\QuoteOffer;

/**
 * @method  QuoteOffer  current()
 * @method  QuoteOffer  first()
 * @method  QuoteOffer  get($offset)
 * @method  QuoteOffer  offsetGet($offset)
 * @method  QuoteOffer  last()
 */
class QuoteOfferCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = QuoteOffer::class;
}