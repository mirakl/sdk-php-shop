<?php
namespace Mirakl\MMP\Common\Domain\Collection\Offer\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Offer\Shipping\ShippingPriceByZoneAndType;

class ShippingPriceByZoneAndTypeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShippingPriceByZoneAndType::class;
}