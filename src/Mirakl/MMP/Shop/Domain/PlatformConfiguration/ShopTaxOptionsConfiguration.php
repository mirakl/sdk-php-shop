<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method TaxIdNumberConfiguration getLocalTaxNumber()
 * @method $this                    setLocalTaxNumber(TaxIdNumberConfiguration|array $localTaxNumber)
 * @method TaxIdNumberConfiguration getTaxIdentificationNumber()
 * @method $this                    setTaxIdentificationNumber(TaxIdNumberConfiguration|array $taxIdentificationNumber)
 */
class ShopTaxOptionsConfiguration extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'local_tax_number'          => [TaxIdNumberConfiguration::class, 'create'],
        'tax_identification_number' => [TaxIdNumberConfiguration::class, 'create'],
    ];
}
