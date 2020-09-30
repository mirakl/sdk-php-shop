<?php
namespace Mirakl\MMP\FrontOperator\Domain\Order;

use Mirakl\MMP\Common\Domain\Order\AbstractOrderCustomer;

/**
 * @method  string                  getEmail()
 * @method  $this                   setEmail(string $email)
 * @method  CustomerShippingAddress getShippingAddress()
 * @method  $this                   setShippingAddress(array|CustomerShippingAddress $shippingAddress)
 */
class OrderCustomer extends AbstractOrderCustomer
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipping_address' => [CustomerShippingAddress::class, 'create'],
    ];
}