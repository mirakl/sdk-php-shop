<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipping\ShippingTypeWithDescription;

/**
 * @method  ShippingTypeWithDescription current()
 * @method  ShippingTypeWithDescription first()
 * @method  ShippingTypeWithDescription get($offset)
 * @method  ShippingTypeWithDescription offsetGet($offset)
 * @method  ShippingTypeWithDescription last()
 */
class ShippingTypeWithDescriptionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShippingTypeWithDescription::class;
}