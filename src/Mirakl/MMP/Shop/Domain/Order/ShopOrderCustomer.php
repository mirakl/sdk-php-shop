<?php
namespace Mirakl\MMP\Shop\Domain\Order;

use Mirakl\MMP\Common\Domain\Order\AbstractOrderCustomer;
use Mirakl\MMP\Common\Domain\Order\ShopCustomerShippingAddress;

/**
 * @method  ShopCustomerShippingAddress getShippingAddress()
 * @method  $this                       setShippingAddress(array|ShopCustomerShippingAddress $shippingAddress)
 */
class ShopOrderCustomer extends AbstractOrderCustomer
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipping_address' => [ShopCustomerShippingAddress::class, 'create'],
    ];
}