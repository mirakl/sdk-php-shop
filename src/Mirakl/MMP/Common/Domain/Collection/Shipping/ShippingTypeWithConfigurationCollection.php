<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipping\ShippingTypeWithConfiguration;

/**
 * @method  ShippingTypeWithConfiguration   current()
 * @method  ShippingTypeWithConfiguration   first()
 * @method  ShippingTypeWithConfiguration   get($offset)
 * @method  ShippingTypeWithConfiguration   offsetGet($offset)
 * @method  ShippingTypeWithConfiguration   last()
 */
class ShippingTypeWithConfigurationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShippingTypeWithConfiguration::class;
}