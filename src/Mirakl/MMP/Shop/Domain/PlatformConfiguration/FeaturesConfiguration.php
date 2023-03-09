<?php
namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method TaxIdNumberConfiguration                getTaxIdNumber() // Unique identifier used to conduct tax-related formalities
 * @method $this                                   setTaxIdNumber(TaxIdNumberConfiguration|array $taxIdNumber) // Allows the collection of information required to calculate taxes, with or without the tax connector
 * @method TaxCollectionConfiguration              getTaxCollection() // Allows the collection of information required to calculate taxes, with or without the tax connector
 * @method $this                                   setTaxCollection(TaxCollectionConfiguration|array $taxCollectionConfiguration)
 * @method PricingConfiguration                    getPricing() // Pricing related features activated
 * @method $this                                   setPricing(PricingConfiguration|array $pricing)
 * @method DirectPaymentCustomerStoreConfiguration getDirectPaymentCustomerStore() // Allow transactions taking place outside of Mirakl between customers and sellers
 * @method $this                                   setDirectPaymentCustomerStore(DirectPaymentCustomerStoreConfiguration|array $directPaymentCustomerStore)
 * @method OrderWorkflowsConfiguration             getOrderWorkflows() // Order workflows activated
 * @method $this                                   setOrderWorkflows(OrderWorkflowsConfiguration|array $orderWorkflows)
 * @method OrderConditionsConfiguration            getOrderConditions() // Order conditions related features activated
 * @method $this                                   setOrderConditions(OrderConditionsConfiguration|array $orderConditions)
 * @method ShipmentConfiguration                   getShipment() // Shipment related features activated
 * @method $this                                   setShipment(ShipmentConfiguration|array $shipmentConfiguration)
 * @method string                                  getOperatorCsvDelimiter() // The delimiter used in the CSV files exported from the back office. COMMA: ',' delimiter. SEMICOLON: ';' delimiter
 * @method $this                                   setOperatorCsvDelimiter(string $operatorCsvDelimiter)
 * @method string                                  getOrderTaxMode() // Prices with tax included or excluded in order
 * @method $this                                   setOrderTaxMode(string $orderTaxMode)
 * @method bool                                    getIsMultiCurrency() // Defines if platform supports multi currencies
 * @method $this                                   setIsMultiCurrency(bool $isMultiCurrency)
 * @method bool                                    getIsCircularEconomyDataCollection() // Allow operators to collect data related to the circular economy regulation
 * @method $this                                   setIsCircularEconomyDataCollection(bool $isCircularEconomyDataCollection)
 * @method bool                                    getIsDisableSellerAlternativeCarrier() // Prevent stores from specifying alternatives carriers outside those predefined by the operator
 * @method $this                                   setIsDisableSellerAlternativeCarrier(bool $isDisableSellerAlternativeCarrier)
 * @method string                                  getOfferPricesDecimals() // Defines maximum number of decimals in offer prices
 * @method $this                                   setOfferPricesDecimals(string $offerPricesDecimals)
 * @method bool                                    getIsProductDataValidationByChannel() // Facilitates the management of attributes in a multilingual context
 * @method $this                                   setIsProductDataValidationByChannel(bool $isDisableSellerAlternativeCarrier)
 * @method bool                                    getIsNoReplyNeeded() // Allows to end order-related conversations when the last message sent from customer does not specifically require a reply
 * @method $this                                   setIsNoReplyNeeded(bool $isNoReplyNeeded)
 */
class FeaturesConfiguration extends MiraklObject
{
    const CSV_DELIMITER_COMMA = 'COMMA';
    const CSV_DELIMITER_SEMICOLON = 'SEMICOLON';
    const ORDER_TAX_MODE_TAX_INCLUDED = 'TAX_INCLUDED';
    const ORDER_TAX_MODE_TAX_EXCLUDED = 'TAX_EXCLUDED';

    /**
     * @var array
     */
    protected static $dataTypes = [
        'tax_id_number'                 => [TaxIdNumberConfiguration::class, 'create'],
        'tax_collection'                => [TaxCollectionConfiguration::class, 'create'],
        'pricing'                       => [PricingConfiguration::class, 'create'],
        'direct_payment_customer_store' => [DirectPaymentCustomerStoreConfiguration::class, 'create'],
        'order_workflows'               => [OrderWorkflowsConfiguration::class, 'create'],
        'order_conditions'              => [OrderConditionsConfiguration::class, 'create'],
        'shipment'                      => [ShipmentConfiguration::class, 'create'],
    ];

    /**
     * @var array
     */
    protected static $mapping = [
        'multi_currency'                     => 'is_multi_currency',
        'disable_seller_alternative_carrier' => 'is_disable_seller_alternative_carrier',
        'product_data_validation_by_channel' => 'is_product_data_validation_by_channel',
        'no_reply_needed'                    => 'is_no_reply_needed',
        'circular_economy_data_collection'   => 'is_circular_economy_data_collection',
    ];
}