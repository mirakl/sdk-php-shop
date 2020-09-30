<?php
namespace Mirakl\MMP\Front\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Shipping\ShippingFeeType;

/**
 * @method  ShippingFeeType current()
 * @method  ShippingFeeType first()
 * @method  ShippingFeeType get($offset)
 * @method  ShippingFeeType offsetGet($offset)
 * @method  ShippingFeeType last()
 */
class ShippingFeeTypeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShippingFeeType::class;
}