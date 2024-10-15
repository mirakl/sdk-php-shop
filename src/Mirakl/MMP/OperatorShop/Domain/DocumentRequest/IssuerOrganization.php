<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

/**
 * @method FiscalRepresentative getFiscalRepresentative($fiscalRepresentative)
 * @method $this                setFiscalRepresentative(FiscalRepresentative|array $fiscalRepresentative)
 * @method PersonalInformation  getPersonalInformation()
 * @method $this                setPersonalInformation(PersonalInformation|array $personalInformation)
 * @method bool                 getSoleTrader()
 * @method $this                setSoleTrader(bool $soleTrader)
 */
class IssuerOrganization extends Organization
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
