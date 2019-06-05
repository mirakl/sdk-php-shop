<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\MMP\Common\Domain\Customer\AbstractCustomer;

/**
 * @method  CustomerBillingAddress  getBillingAddress()
 * @method  $this                   setBillingAddress(array|CustomerBillingAddress $billingAddress)
 */
abstract class AbstractOrderCustomer extends AbstractCustomer
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'billing_address' => [CustomerBillingAddress::class, 'create'],
    ];
}