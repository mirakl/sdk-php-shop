<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method RecipientAddress      getBillingAddress()
 * @method $this                 setBillingAddress(array|RecipientAddress $billingAddress)
 * @method string                getId()
 * @method $this                 setId(string $id)
 * @method string                getLocale()
 * @method $this                 setLocale(string $locale)
 * @method RecipientOrganization getOrganization()
 * @method $this                 setOrganization(array|RecipientOrganization $organization)
 * @method RecipientAddress      getShippingAddress()
 * @method $this                 setShippingAddress(array|RecipientAddress $shippingAddress)
 */
class Recipient extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'organization'     => [RecipientOrganization::class, 'create'],
        'billing_address'  => [RecipientAddress::class, 'create'],
        'shipping_address' => [RecipientAddress::class, 'create'],
    ];
}
