<?php
namespace Mirakl\MMP\FrontOperator\Domain\Quote;

use Mirakl\MMP\Common\Domain\Customer\AbstractCustomer;
use Mirakl\MMP\Common\Domain\Order\CustomerBillingAddress;
use Mirakl\MMP\FrontOperator\Domain\Order\CustomerShippingAddress;

/**
 * @method  CustomerBillingAddress  getBillingAddress()
 * @method  $this                   setBillingAddress(array|CustomerBillingAddress $billingAddress)
 * @method  CustomerShippingAddress getShippingAddress()
 * @method  $this                   setShippingAddress(array|CustomerShippingAddress $shippingAddress)
 * @method  string                  getEmail()
 * @method  $this                   setEmail(string $email)
 */
class QuoteRequestCustomer extends AbstractCustomer
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'billing_address'  => [CustomerBillingAddress::class, 'create'],
        'shipping_address' => [CustomerShippingAddress::class, 'create'],
    ];
}