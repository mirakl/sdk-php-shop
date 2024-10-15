<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method OrganizationAddress getAddress()
 * @method $this               setAddress(OrganizationAddress|array $address)
 * @method string              getBusinessActivityCode()
 * @method $this               setBusinessActivityCode(string $businessActivityCode)
 * @method string              getCompanyShareholders()
 * @method $this               setCompanyShareholders(string $companyShareholders)
 * @method string              getIdentificationNumber()
 * @method $this               setIdentificationNumber(string $identificationNumber)
 * @method bool                getIsInLiquidation()
 * @method $this               setIsInLiquidation(bool $isInLiquidation)
 * @method string              getLegalForm()
 * @method $this               setLegalForm(string $legalForm)
 * @method string              getLocalTaxNumber()
 * @method $this               setLocalTaxNumber(string $localTaxNumber)
 * @method string              getLocalTaxNumberCountry()
 * @method $this               setLocalTaxNumberCountry(string $localTaxNumberCountry)
 * @method string              getName()
 * @method $this               setName(string $name)
 * @method float               getShareCapital()
 * @method $this               setShareCapital(float $shareCapital)
 * @method string              getShareCapitalCurrency()
 * @method $this               setShareCapitalCurrency(string $shareCapitalCurrency)
 * @method string              getTaxIdentificationNumber()
 * @method $this               setTaxIdentificationNumber(string $taxIdentificationNumber)
 * @method string              getTaxNumberCountry()
 * @method $this               setTaxNumberCountry(string $taxNumberCountry)
 * @method string              getTradeCompanyRegistrationLocation()
 * @method $this               setTradeCompanyRegistrationLocation(string $tradeCompanyRegistrationLocation)
 */
class Organization extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'address' => [OrganizationAddress::class, 'create'],
        'fiscal_representative' => [FiscalRepresentative::class, 'create'],
        'personal_information' => [PersonalInformation::class, 'create'],
    ];
}
