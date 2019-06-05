<?php
namespace Mirakl\MMP\Common\Domain\Order;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Shipping\ShippingType;
use Mirakl\MMP\Common\Domain\Shipping\ShippingZone;

/**
 * @method  string          getCarrier()
 * @method  $this           setCarrier(string $carrier)
 * @method  string          getCarrierCode()
 * @method  $this           setCarrierCode(string $carrierCode)
 * @method  float           getPrice()
 * @method  $this           setPrice(float $price)
 * @method  string          getTrackingNumber()
 * @method  $this           setTrackingNumber(string $trackingNumber)
 * @method  string          getTrackingUrl()
 * @method  $this           setTrackingUrl(string $trackingUrl)
 * @method  ShippingType    getType()
 * @method  $this           setType(array|ShippingType $shippingType)
 * @method  ShippingZone    getZone()
 * @method  $this           setZone(array|ShippingZone $shippingZone)
 */
class OrderShipping extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'company'               => 'carrier',
        'shipping_price'        => 'price',
        'shipping_company'      => 'carrier',
        'shipping_carrier_code' => 'carrier_code',
        'shipping_tracking'     => 'tracking_number',
        'shipping_tracking_url' => 'tracking_url',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'type' => [ShippingType::class, 'create'],
        'zone' => [ShippingZone::class, 'create'],
    ];
}