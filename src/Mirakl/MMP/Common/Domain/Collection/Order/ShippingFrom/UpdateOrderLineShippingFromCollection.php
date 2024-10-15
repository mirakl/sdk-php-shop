<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Order\ShippingFrom;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\ShippingFrom\UpdateOrderLineShippingFrom;

/**
 * @method UpdateOrderLineShippingFrom current()
 * @method UpdateOrderLineShippingFrom first()
 * @method UpdateOrderLineShippingFrom get($offset)
 * @method UpdateOrderLineShippingFrom offsetGet($offset)
 * @method UpdateOrderLineShippingFrom last()
 */
class UpdateOrderLineShippingFromCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdateOrderLineShippingFrom::class;
}
