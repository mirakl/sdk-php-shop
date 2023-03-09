<?php
namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method bool                    getIsMiraklCatalogIntegrator() // Is Mirakl Catalog Integrator activated
 * @method $this                   setIsMiraklCatalogIntegrator(bool $isMiraklCatalogIntegrator)
 * @method bool                    getIsMiraklCatalogManager() // Is Mirakl Catalog Manager activated
 * @method $this                   setIsMiraklCatalogManager(bool $isMiraklCatalogManager)
 * @method bool                    getIsMiraklPlatformService() // Is Mirakl Platform for Services activated
 * @method $this                   setIsMiraklPlatformService(bool $isMiraklPlatformService)
 * @method bool                    getIsOfferManagement() // Is offer management available on the platform
 * @method $this                   setIsOfferManagement(bool $isOfferManagement)
 * @method bool                    getIsOrderManagement() // Is order management available on the platform
 * @method $this                   setIsOrderManagement(bool $isOrderManagement)
 * @method bool                    getIsPromotions() // Is promotion module activated
 * @method $this                   setIsPromotions(bool $isPromotions)
 * @method bool                    getIsQuotes() // Is quote module activated
 * @method $this                   setIsQuotes(bool $isQuotes)
 * @method TaxManagerConfiguration getTaxManager() // Is promotion module activated
 * @method $this                   setTaxManager(TaxManagerConfiguration|array $taxManager)
 */
class ModulesConfiguration extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'tax_manager' => [TaxManagerConfiguration::class, 'create'],
    ];

    /**
     * @var array
     */
    protected static $mapping = [
        'mirakl_catalog_integrator' => 'is_mirakl_catalog_integrator',
        'mirakl_catalog_manager'    => 'is_mirakl_catalog_manager',
        'mirakl_platform_services'  => 'is_mirakl_platform_service',
        'offer_management'          => 'is_offer_management',
        'order_management'          => 'is_order_management',
        'promotions'                => 'is_promotions',
        'quotes'                    => 'is_quotes',
    ];
}