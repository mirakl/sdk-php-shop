<?php
namespace Mirakl\MMP\Front\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipping\ShippingType;

/**
 * @method  ShippingType current()
 * @method  ShippingType first()
 * @method  ShippingType get($offset)
 * @method  ShippingType offsetGet($offset)
 * @method  ShippingType last()
 */
class ShippingTypeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShippingType::class;
}