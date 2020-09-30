<?php
namespace Mirakl\MMP\Front\Domain\Shipping;

use Mirakl\MMP\Common\Domain\Shipping\ShippingTypeWithConfiguration;
use Mirakl\MMP\Front\Domain\Collection\Shipping\ShippingFeeTypeCollection;
use Mirakl\MMP\Front\Domain\Collection\Shipping\ShippingFeeOfferCollection;

/**
 * @method  ShippingFeeTypeCollection       getAvailableShippingTypes()
 * @method  $this                           setAvailableShippingTypes(array|ShippingFeeTypeCollection $availableShippingTypes)
 * @method  string                          getChannelCode()
 * @method  $this                           setChannelCode(string $channelCode)
 * @method  string                          getErrorCode()
 * @method  $this                           setErrorCode(string $errorCode)
 * @method  string                          getErrorMessage()
 * @method  $this                           setErrorMessage(string $errorMessage)
 * @method  ShippingFeeOfferCollection      getOffers()
 * @method  $this                           setOffers(array|ShippingFeeOfferCollection $offers)
 * @method  ShippingTypeWithConfiguration   getSelectedShippingType()
 * @method  $this                           setSelectedShippingType(array|ShippingTypeWithConfiguration $selectedShippingType)
 */
class ShopShippingFee extends AbstractShopShipping
{
    /**
     * @var array
     */
    protected static $mapping = [
        'shipping_types' => 'available_shipping_types',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'available_shipping_types' => [ShippingFeeTypeCollection::class, 'create'],
        'offers'                   => [ShippingFeeOfferCollection::class, 'create'],
        'selected_shipping_type'   => [ShippingTypeWithConfiguration::class, 'create'],
    ];
}