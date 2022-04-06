<?php
namespace Mirakl\MMP\Common\Domain\Offer\Shipping;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string        getCode()
 * @method  $this         setCode(string $code)
 * @method  string        getLabel()
 * @method  $this         setLabel(string $label)
 * @method  string        getShippingZoneCode()
 * @method  $this         setShippingZoneCode(string $shippingZoneCode)
 * @method  string        getShippingZoneLabel()
 * @method  $this         setShippingZoneLabel(string $shippingZoneLabel)
 * @method  float         getShippingPriceUnit()
 * @method  $this         setShippingPriceUnit(float $shippingPriceUnit)
 * @method  DeliveryTime  getDeliveryTime()
 * @method  $this         setDeliveryTime(DeliveryTime $deliveryTime)
 */
class ShippingPriceByZoneAndType extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'delivery_time' => [DeliveryTime::class, 'create']
    ];
}