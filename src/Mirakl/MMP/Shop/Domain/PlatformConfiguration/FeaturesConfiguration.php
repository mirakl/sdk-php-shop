<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method DirectPaymentCustomerStoreConfiguration getDirectPaymentCustomerStore() // Allow transactions taking place outside of Mirakl between customers and sellers
 * @method $this                                   setDirectPaymentCustomerStore(DirectPaymentCustomerStoreConfiguration|array $directPaymentCustomerStore)
 * @method bool                                    getIsCircularEconomyDataCollection() // Allow operators to collect data related to the circular economy regulation
 * @method $this                                   setIsCircularEconomyDataCollection(bool $isCircularEconomyDataCollection)
 * @method bool                                    getIsCompetitivePricingTool() // The competitive pricing tool allows stores to view and possibly match competing Marketplace offers
 * @method $this                                   setIsCompetitivePricingTool(bool $isCompetitivePricingTool)
 * @method bool                                    getIsDisableSellerAlternativeCarrier() // Prevent stores from specifying alternatives carriers outside those predefined by the operator
 * @method $this                                   setIsDisableSellerAlternativeCarrier(bool $isDisableSellerAlternativeCarrier)
 * @method bool                                    getIsMultiCurrency() // Defines if platform supports multi currencies
 * @method $this                                   setIsMultiCurrency(bool $isMultiCurrency)
 * @method bool                                    getIsNoReplyNeeded() // Allows to end order-related conversations when the last message sent from customer does not specifically require a reply
 * @method $this                                   setIsNoReplyNeeded(bool $isNoReplyNeeded)
 * @method bool                                    getIsProductDataValidationByChannel() // Facilitates the management of attributes in a multilingual context
 * @method $this                                   setIsProductDataValidationByChannel(bool $isDisableSellerAlternativeCarrier)
 * @method string                                  getLeadTimeToShipBySellersEnabled() // Allows sellers to override the default lead time to ship
 * @method $this                                   setLeadTimeToShipBySellersEnabled(string $leadTimeToShipBySellersEnabled)
 * @method string                                  getOfferPricesDecimals() // Defines maximum number of decimals in offer prices
 * @method $this                                   setOfferPricesDecimals(string $offerPricesDecimals)
 * @method string                                  getOperatorCsvDelimiter() // The delimiter used in the CSV files exported from the back office. COMMA: ',' delimiter. SEMICOLON: ';' delimiter
 * @method $this                                   setOperatorCsvDelimiter(string $operatorCsvDelimiter)
 * @method OrderConditionsConfiguration            getOrderConditions() // Order conditions related features activated
 * @method $this                                   setOrderConditions(OrderConditionsConfiguration|array $orderConditions)
 * @method string                                  getOrderTaxMode() // Prices with tax included or excluded in order
 * @method $this                                   setOrderTaxMode(string $orderTaxMode)
 * @method OrderWorkflowsConfiguration             getOrderWorkflows() // Order workflows activated
 * @method $this                                   setOrderWorkflows(OrderWorkflowsConfiguration|array $orderWorkflows)
 * @method PricingConfiguration                    getPricing() // Pricing related features activated
 * @method $this                                   setPricing(PricingConfiguration|array $pricing)
 * @method ShipmentConfiguration                   getShipment() // Shipment related features activated
 * @method $this                                   setShipment(ShipmentConfiguration|array $shipmentConfiguration)
 * @method ShopTaxOptionsConfiguration             getShopTaxOptions() // Tax-related options for professional shops
 * @method $this                                   setShopTaxOptions(ShopTaxOptionsConfiguration|array $shopTaxOptions)
 * @method TaxCollectionConfiguration              getTaxCollection() // Allows the collection of information required to calculate taxes, with or without the tax connector
 * @method $this                                   setTaxCollection(TaxCollectionConfiguration|array $taxCollectionConfiguration)
 * @method TaxIdNumberConfiguration                getTaxIdNumber() // Unique identifier used to conduct tax-related formalities
 * @method $this                                   setTaxIdNumber(TaxIdNumberConfiguration|array $taxIdNumber) // Allows the collection of information required to calculate taxes, with or without the tax connector
 */
class FeaturesConfiguration extends MiraklObject
{
    public const CSV_DELIMITER_COMMA = 'COMMA';
    public const CSV_DELIMITER_SEMICOLON = 'SEMICOLON';
    public const ORDER_TAX_MODE_TAX_EXCLUDED = 'TAX_EXCLUDED';
    public const ORDER_TAX_MODE_TAX_INCLUDED = 'TAX_INCLUDED';

    /**
     * @var array
     */
    protected static $dataTypes = [
        'direct_payment_customer_store' => [DirectPaymentCustomerStoreConfiguration::class, 'create'],
        'order_conditions'              => [OrderConditionsConfiguration::class, 'create'],
        'order_workflows'               => [OrderWorkflowsConfiguration::class, 'create'],
        'shipment'                      => [ShipmentConfiguration::class, 'create'],
        'shop_tax_options'              => [ShopTaxOptionsConfiguration::class, 'create'],
        'tax_collection'                => [TaxCollectionConfiguration::class, 'create'],
        'tax_id_number'                 => [TaxIdNumberConfiguration::class, 'create'],
        'pricing'                       => [PricingConfiguration::class, 'create'],
    ];

    /**
     * @var array
     */
    protected static $mapping = [
        'circular_economy_data_collection'   => 'is_circular_economy_data_collection',
        'competitive_pricing_tool'           => 'is_competitive_pricing_tool',
        'disable_seller_alternative_carrier' => 'is_disable_seller_alternative_carrier',
        'multi_currency'                     => 'is_multi_currency',
        'no_reply_needed'                    => 'is_no_reply_needed',
        'product_data_validation_by_channel' => 'is_product_data_validation_by_channel',
    ];
}
