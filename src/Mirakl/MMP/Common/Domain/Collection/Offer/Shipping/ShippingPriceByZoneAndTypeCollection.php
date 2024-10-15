<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Offer\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Offer\Shipping\ShippingPriceByZoneAndType;

/**
 * @method ShippingPriceByZoneAndType current()
 * @method ShippingPriceByZoneAndType first()
 * @method ShippingPriceByZoneAndType get($offset)
 * @method ShippingPriceByZoneAndType offsetGet($offset)
 * @method ShippingPriceByZoneAndType last()
 */
class ShippingPriceByZoneAndTypeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShippingPriceByZoneAndType::class;
}
