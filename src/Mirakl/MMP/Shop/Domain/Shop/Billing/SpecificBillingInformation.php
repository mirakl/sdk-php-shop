<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Shop\Billing;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method CorporateInformation getCorporateInformation()
 * @method $this                setCorporateInformation(CorporateInformation|array $corporateInformation)
 * @method FiscalInformation    getFiscalInformation()
 * @method $this                setFiscalInformation(FiscalInformation|array $fiscalInformation)
 * @method FiscalRepresentative getFiscalRepresentative()
 * @method $this                setFiscalRepresentative(FiscalRepresentative|array $fiscalRepresentative)
 * @method PersonalInformation  getPersonalInformation()
 * @method $this                setPersonalInformation(PersonalInformation|array $personalInformation)
 * @method RegistrationAddress  getRegistrationAddress()
 * @method $this                setRegistrationAddress(RegistrationAddress|array $registrationAddress)
 */
class SpecificBillingInformation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'corporate_information' => [CorporateInformation::class, 'create'],
        'fiscal_information'    => [FiscalInformation::class, 'create'],
        'fiscal_representative' => [FiscalRepresentative::class, 'create'],
        'personal_information'  => [PersonalInformation::class, 'create'],
        'registration_address'  => [RegistrationAddress::class, 'create'],
    ];
}
