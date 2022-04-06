<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\MMP\Common\Domain\Customer\AbstractCustomer;

/**
 * @method  CustomerBillingAddress  getBillingAddress()
 * @method  $this                   setBillingAddress(array|CustomerBillingAddress $billingAddress)
 * @method  CustomerOrganization    getOrganization()
 * @method  $this                   setOrganization(array|CustomerOrganization $organization)
 */
abstract class AbstractOrderCustomer extends AbstractCustomer
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'billing_address' => [CustomerBillingAddress::class, 'create'],
        'organization'    => [CustomerOrganization::class, 'create'],
    ];
}