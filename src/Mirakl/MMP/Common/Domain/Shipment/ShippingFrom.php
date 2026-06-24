<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method ShippingFromAddress   getAddress()
 * @method $this                 setAddress(array|ShippingFromAddress $shippingFromAddress)
 * @method ShippingFromWarehouse getWarehouse()
 * @method $this                 setWarehouse(array|ShippingFromWarehouse $shippingFromWarehouse)
 */
class ShippingFrom extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'address'   => [ShippingFromAddress::class, 'create'],
        'warehouse' => [ShippingFromWarehouse::class, 'create'],
    ];
}
