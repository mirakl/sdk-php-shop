<?php
namespace Mirakl\MMP\Common\Domain\Offer\Async\Export;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string                                  getCode()
 * @method  $this                                   setCode(string $code)
 * @method  AsyncExportOfferShippingDeliveryTime    getDeliveryTime()
 * @method  $this                                   setDeliveryTime(AsyncExportOfferShippingDeliveryTime $deliveryTime)
 * @method  float                                   getShippingPriceUnit()
 * @method  $this                                   setShippingPriceUnit(float $shippingPriceUnit)
 * @method  string                                  getShippingZoneCode()
 * @method  $this                                   setShippingZoneCode(string $shippingZoneCode)
 */
class AsyncExportOfferShippingType extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'delivery_time' => [AsyncExportOfferShippingDeliveryTime::class, 'create'],
    ];
}