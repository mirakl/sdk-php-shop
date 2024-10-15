<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method CustomerOrganizationAddress getAddress()
 * @method $this                       setAddress(CustomerOrganizationAddress|array $address)
 * @method string                      getIdentificationNumber()
 * @method $this                       setIdentificationNumber(string $identificationNumber)
 * @method string                      getName()
 * @method $this                       setName(string $name)
 * @method string                      getTaxIdentificationNumber()
 * @method $this                       setTaxIdentificationNumber(string $taxIdentificationNumber)
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
