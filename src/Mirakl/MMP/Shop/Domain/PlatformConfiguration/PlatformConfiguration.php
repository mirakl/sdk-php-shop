<?php
namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method CustomerModelConfiguration getCustomerModelConfiguration()
 * @method $this                      setCustomerModelConfiguration(CustomerModelConfiguration|array $customerModelConfiguration)
 * @method PlatformModelConfiguration getPlatformModelConfiguration()
 * @method $this                      setPlatformModelConfiguration(PlatformModelConfiguration|array $platformModelConfiguration)
 */
class PlatformConfiguration extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'customer_model_configuration' => [CustomerModelConfiguration::class, 'create'],
        'platform_model_configuration' => [PlatformModelConfiguration::class, 'create'],
    ];

    /**
     * @var array
     */
    protected static $mapping = [
        'customer_model' => 'customer_model_configuration',
        'platform_model' => 'platform_model_configuration',
    ];
}