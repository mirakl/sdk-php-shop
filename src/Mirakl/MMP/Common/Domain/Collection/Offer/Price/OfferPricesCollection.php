<?php
namespace Mirakl\MMP\Common\Domain\Collection\Offer\Price;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Offer\Price\OfferPricing;

/**
 * @method  OfferPricing  current()
 * @method  OfferPricing  first()
 * @method  OfferPricing  get($offset)
 * @method  OfferPricing  offsetGet($offset)
 * @method  OfferPricing  last()
 */
class OfferPricesCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OfferPricing::class;
}