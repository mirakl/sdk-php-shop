<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order\ShippingFrom;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method OrderLineShippingFromAddress getAddress()
 * @method $this                        setAddress(array|OrderLineShippingFromAddress $address)
 */
class OrderLineShippingFrom extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'address' => [OrderLineShippingFromAddress::class, 'create'],
    ];
}
