<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order\ShippingFrom;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string                getId()
 * @method $this                 setId(string $id)
 * @method OrderLineShippingFrom getShippingFrom()
 * @method $this                 setShippingFrom(array|OrderLineShippingFrom $shippingFrom)
 */
class UpdateOrderLineShippingFrom extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipping_from' => [OrderLineShippingFrom::class, 'create'],
    ];
}
