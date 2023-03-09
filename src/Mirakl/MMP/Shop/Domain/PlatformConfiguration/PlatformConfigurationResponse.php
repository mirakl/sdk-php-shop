<?php
namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method FeaturesConfiguration getFeatures()
 * @method $this                 setFeatures(FeaturesConfiguration|array $features)
 * @method ModulesConfiguration  getModules()
 * @method $this                 setModules(ModulesConfiguration|array $modules)
 * @method PlatformConfiguration getPlatformConfiguration()
 * @method $this                 setPlatformConfiguration(PlatformConfiguration|array $platformConfiguration)
 * @method string                getTenantName()
 * @method $this                 setTenantName(string $tenantName)
 * @method string                getTimezone()
 * @method $this                 setTimezone(string $timezone)
 */
class PlatformConfigurationResponse extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'features'               => [FeaturesConfiguration::class, 'create'],
        'modules'                => [ModulesConfiguration::class, 'create'],
        'platform_configuration' => [PlatformConfiguration::class, 'create'],
    ];
}