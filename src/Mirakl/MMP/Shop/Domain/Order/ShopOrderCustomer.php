<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Order;

use Mirakl\MMP\Common\Domain\Order\AbstractOrderCustomer;
use Mirakl\MMP\Common\Domain\Order\ShopCustomerShippingAddress;

/**
 * @method ShopOrderAdditionalContact  getAccountingContact()
 * @method $this                       setAccountingContact(array|ShopOrderAdditionalContact $accountingContact)
 * @method ShopOrderAdditionalContact  getDeliveryContact()
 * @method $this                       setDeliveryContact(array|ShopOrderAdditionalContact $deliveryContact)
 * @method ShopCustomerShippingAddress getShippingAddress()
 * @method $this                       setShippingAddress(array|ShopCustomerShippingAddress $shippingAddress)
 */
class ShopOrderCustomer extends AbstractOrderCustomer
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipping_address'   => [ShopCustomerShippingAddress::class, 'create'],
        'accounting_contact' => [ShopOrderAdditionalContact::class, 'create'],
        'delivery_contact'   => [ShopOrderAdditionalContact::class, 'create'],
    ];
}
