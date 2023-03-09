<?php
namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method bool                     getIsActivated() // Is Tax Manager activated
 * @method $this                    setIsActivated(bool $isActivated)
 * @method TaxProviderConfiguration getTaxProvider() // The tax provider processing tax estimation
 * @method $this                    setTaxProvider(TaxProviderConfiguration|array $taxProvider)
 */
class TaxManagerConfiguration extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'tax_provider' => [TaxProviderConfiguration::class, 'create'],
    ];

    /**
     * @var array
     */
    protected static $mapping = [
        'activated' => 'is_activated',
    ];
}