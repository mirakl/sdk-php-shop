<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order\ShippingFrom;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Order\ShippingFrom\OrderLineShippingFromUpdateResultCollection;

/**
 * @method OrderLineShippingFromUpdateResultCollection getOrderLines()
 * @method $this                                       setOrderLines(array|OrderLineShippingFromUpdateResultCollection $orderLines)
 */
class OrderLinesShippingFromUpdateResponse extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_lines' => [OrderLineShippingFromUpdateResultCollection::class, 'create'],
    ];
}
