<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string                      getName()
 * @method $this                       setName(string $name)
 * @method string                      getIdentificationNumber()
 * @method $this                       setIdentificationNumber(string $number)
 * @method string                      getTaxIdentificationNumber()
 * @method $this                       setTaxIdentificationNumber(string $number)
 * @method CustomerOrganizationAddress getAddress()
 * @method $this                       setAddress(array|CustomerOrganizationAddress $address)
 */
abstract class AbstractCustomerOrganization extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'address' => [CustomerOrganizationAddress::class, 'create'],
    ];
}