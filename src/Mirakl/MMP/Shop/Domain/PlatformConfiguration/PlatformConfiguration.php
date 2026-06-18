<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method CustomerModelConfiguration getCustomerModelConfiguration()
 * @method $this                      setCustomerModelConfiguration(array|CustomerModelConfiguration $customerModelConfiguration)
 * @method EnhancedSellerInvoicing    getEnhancedSellerInvoicing()
 * @method $this                      setEnhancedSellerInvoicing(array|EnhancedSellerInvoicing $enhancedSellerInvoicing)
 * @method PlatformModelConfiguration getPlatformModelConfiguration()
 * @method $this                      setPlatformModelConfiguration(array|PlatformModelConfiguration $platformModelConfiguration)
 */
class PlatformConfiguration extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'customer_model_configuration' => [CustomerModelConfiguration::class, 'create'],
        'enhanced_seller_invoicing'    => [EnhancedSellerInvoicing::class, 'create'],
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
