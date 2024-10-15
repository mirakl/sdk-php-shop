<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Order\ShippingFrom;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\ShippingFrom\OrderLineShippingFromUpdateResult;

/**
 * @method OrderLineShippingFromUpdateResult current()
 * @method OrderLineShippingFromUpdateResult first()
 * @method OrderLineShippingFromUpdateResult get($offset)
 * @method OrderLineShippingFromUpdateResult offsetGet($offset)
 * @method OrderLineShippingFromUpdateResult last()
 */
class OrderLineShippingFromUpdateResultCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderLineShippingFromUpdateResult::class;
}
