<?php
namespace Mirakl\MMP\Common\Domain\Shop;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\AdditionalFieldValueCollection;
use Mirakl\MMP\Common\Domain\Shipping\ShippingType;
use Mirakl\MMP\Common\Domain\Shipping\ShippingZone;

/**
 * @method  AdditionalFieldValueCollection  getAdditionalFields()
 * @method  $this                           setAdditionalFields(array|AdditionalFieldValueCollection $additionalFields)
 * @method  float                           getShippingFreeAmount()
 * @method  $this                           setShippingFreeAmount(float $amount)
 * @method  ShippingType                    getShippingType()
 * @method  $this                           setShippingType(array|ShippingType $shippingType)
 * @method  ShippingZone                    getShippingZone()
 * @method  $this                           setShippingZone(array|ShippingZone $shippingZone)
 */
class ShippingRule extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'shipping_type_code'  => 'shipping_type/code',
        'shipping_type_label' => 'shipping_type/label',
        'shipping_zone_code'  => 'shipping_zone/code',
        'shipping_zone_label' => 'shipping_zone/label',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipping_type'     => [ShippingType::class, 'create'],
        'shipping_zone'     => [ShippingZone::class, 'create'],
        'additional_fields' => [AdditionalFieldValueCollection::class, 'create']
    ];
}