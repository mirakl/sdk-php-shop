<?php
namespace Mirakl\MMP\Front\Domain\Shipping;

use Mirakl\MMP\Common\Domain\Shipping\ShippingTypeWithConfiguration;
use Mirakl\MMP\Front\Domain\Collection\Shipping\ShippingFeeTypeCollection;
use Mirakl\MMP\Front\Domain\Collection\Shipping\ShippingRateOfferCollection;

/**
 * @method  string                          getChannelCode()
 * @method  $this                           setChannelCode(string $channelCode)
 * @method  ShippingRateOfferCollection     getOffers()
 * @method  $this                           setOffers(array|ShippingRateOfferCollection $offers)
 * @method  ShippingTypeWithConfiguration   getSelectedShippingType()
 * @method  $this                           setSelectedShippingType(array|ShippingTypeWithConfiguration $selectedShippingType)
 * @method  ShippingFeeTypeCollection       getShippingTypes()
 * @method  $this                           setShippingTypes(array|ShippingFeeTypeCollection $shippingTypes)
 */
class OrderShippingFee extends AbstractShopShipping
{
    /**
     * @var array
     */
    protected static $mapping = [
        'shipping_type_code'  => 'shipping_type/code',
        'shipping_type_label' => 'shipping_type/label',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipping_types'         => [ShippingFeeTypeCollection::class, 'create'],
        'offers'                 => [ShippingRateOfferCollection::class, 'create'],
        'selected_shipping_type' => [ShippingTypeWithConfiguration::class, 'create'],
    ];
}