<?php
namespace Mirakl\MMP\Front\Domain\Shipping;

use Mirakl\MMP\Common\Domain\Shipping\ShippingTypeWithConfiguration;

/**
 * @method  ShippingTypeWithConfiguration   getShippingType()
 * @method  $this                           setShippingType(array|ShippingTypeWithConfiguration $shippingType)
 */
class ShippingFeeOffer extends AbstractShippingOffer
{
    /**
     * @var array
     */
    protected static $mapping = [
        'offer_discount'         => 'discount',
        'offer_id'               => 'id',
        'offer_price'            => 'price',
        'offer_quantity'         => 'quantity',
        'selected_shipping_type' => 'shipping_type',
        'shipping_types'         => 'shipping_type_details'
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipping_type' => [ShippingTypeWithConfiguration::class, 'create'],
    ];
}