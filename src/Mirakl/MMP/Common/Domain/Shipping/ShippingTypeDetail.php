<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipping;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string       getCode()
 * @method $this        setCode(string $code)
 * @method DeliveryTime getDeliveryTime()
 * @method $this        setDeliveryTime(DeliveryTime $deliveryTime)
 * @method string       getLabel()
 * @method $this        setLabel(string $label)
 * @method float        getLineOnlyShippingPrice();
 * @method $this        setLineOnlyShippingPrice(float $lineOnlyShippingPrice);
 * @method float        getLineOnlyTotalPrice();
 * @method $this        setLineOnlyTotalPrice(float $lineOnlyTotalPrice);
 * @method float        getLineShippingPrice();
 * @method $this        setLineShippingPrice(float $lineShippingPrice);
 * @method float        getLineTotalPrice();
 * @method $this        setLineTotalPrice(float $lineTotalPrice);
 * @method float        getShippingPriceAdditionalUnit();
 * @method $this        setShippingPriceAdditionalUnit(float $shippingPriceAdditionalUnit);
 * @method float        getShippingPriceUnit();
 * @method $this        setShippingPriceUnit(float $shippingPriceUnit);
 */
class ShippingTypeDetail extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'delivery_time' => [DeliveryTime::class, 'create'],
    ];
}
