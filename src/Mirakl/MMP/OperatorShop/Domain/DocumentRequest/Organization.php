<?php
namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string              getName()
 * @method $this               setName(string $name)
 * @method string              getIdentificationNumber()
 * @method $this               setIdentificationNumber(string $identificationNumber)
 * @method string              getTaxIdentificationNumber()
 * @method $this               setTaxIdentificationNumber(string $taxIdentificationNumber)
 * @method OrganizationAddress getAddress()
 * @method $this               setAddress(OrganizationAddress|array $address)
 */
class Organization extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'address' => [OrganizationAddress::class, 'create'],
    ];
}