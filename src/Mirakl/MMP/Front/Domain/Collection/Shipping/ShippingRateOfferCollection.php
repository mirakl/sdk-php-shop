<?php
namespace Mirakl\MMP\Front\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Shipping\ShippingRateOffer;

/**
 * @method  ShippingRateOffer    current()
 * @method  ShippingRateOffer    first()
 * @method  ShippingRateOffer    get($offset)
 * @method  ShippingRateOffer    offsetGet($offset)
 * @method  ShippingRateOffer    last()
 */
class ShippingRateOfferCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShippingRateOffer::class;
}