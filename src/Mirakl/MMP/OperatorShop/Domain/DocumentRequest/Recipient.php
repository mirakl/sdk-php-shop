<?php
namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string                getId()
 * @method $this                 setId(string $id)
 * @method RecipientOrganization getOrganization()
 * @method $this                 setOrganization(RecipientOrganization|array $organization)
 * @method RecipientAddress      getBillingAddress()
 * @method $this                 setBillingAddress(RecipientAddress|array $billingAddress)
 * @method RecipientAddress      getShippingAddress()
 * @method $this                 setShippingAddress(RecipientAddress|array $shippingAddress)
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