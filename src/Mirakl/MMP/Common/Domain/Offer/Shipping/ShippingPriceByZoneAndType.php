<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Offer\Shipping;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string       getCode()
 * @method $this        setCode(string $code)
 * @method \DateTime    getCutOffNextDate()
 * @method $this        setCutOffNextDate(\DateTime $cutOffNextDate)
 * @method string       getCutOffTime()
 * @method $this        setCutOffTime(string $cutOffTime)
 * @method DeliveryTime getDeliveryTime()
 * @method $this        setDeliveryTime(DeliveryTime $deliveryTime)
 * @method string       getLabel()
 * @method $this        setLabel(string $label)
 * @method \DateTime    getShippingDeadline()
 * @method $this        setShippingDeadline(\DateTime $shippingDeadline)
 * @method float        getShippingPriceUnit()
 * @method $this        setShippingPriceUnit(float $shippingPriceUnit)
 * @method string       getShippingZoneCode()
 * @method $this        setShippingZoneCode(string $shippingZoneCode)
 * @method string       getShippingZoneLabel()
 * @method $this        setShippingZoneLabel(string $shippingZoneLabel)
 * @method string       getStandardCode()
 * @method $this        setStandardCode(string $standardCode)
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
