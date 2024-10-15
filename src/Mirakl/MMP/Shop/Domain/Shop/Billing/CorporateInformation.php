<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Shop\Billing;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string                   getCompanyRegistrationName()
 * @method $this                    setCompanyRegistrationName(string $companyRegistrationName)
 * @method string                   getCompanyRegistrationNumber()
 * @method $this                    setCompanyRegistrationNumber(string $companyRegistrationNumber)
 * @method ComplementaryInformation getComplementaryInformation()
 * @method $this                    setComplementaryInformation(ComplementaryInformation|array $complementaryInformation)
 */
class CorporateInformation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'complementary_information' => [ComplementaryInformation::class, 'create'],
    ];
}
