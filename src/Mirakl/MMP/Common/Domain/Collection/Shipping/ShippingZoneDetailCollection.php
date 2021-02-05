<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipping\ShippingZoneDetail;

/**
 * @method  ShippingZoneDetail  current()
 * @method  ShippingZoneDetail  first()
 * @method  ShippingZoneDetail  get($offset)
 * @method  ShippingZoneDetail  offsetGet($offset)
 * @method  ShippingZoneDetail  last()
 */
class ShippingZoneDetailCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShippingZoneDetail::class;
}