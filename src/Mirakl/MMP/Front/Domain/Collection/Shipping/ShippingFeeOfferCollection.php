<?php
namespace Mirakl\MMP\Front\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Shipping\ShippingFeeOffer;

/**
 * @method  ShippingFeeOffer    current()
 * @method  ShippingFeeOffer    first()
 * @method  ShippingFeeOffer    get($offset)
 * @method  ShippingFeeOffer    offsetGet($offset)
 * @method  ShippingFeeOffer    last()
 */
class ShippingFeeOfferCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShippingFeeOffer::class;
}