<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order\ShippingFrom;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\ShippingFrom\UpdateOrderLineShippingFromCollection;

/**
 * @method string                                getId()
 * @method $this                                 setId(string $id)
 * @method UpdateOrderLineShippingFromCollection getOrderLines()
 * @method $this                                 setOrderLines(array|UpdateOrderLineShippingFromCollection $orderLines)
 */
class UpdateOrderLinesShippingFrom extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_lines' => [UpdateOrderLineShippingFromCollection::class, 'create'],
    ];
}
