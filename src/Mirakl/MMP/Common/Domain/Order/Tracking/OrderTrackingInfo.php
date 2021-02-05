<?php
namespace Mirakl\MMP\Common\Domain\Order\Tracking;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getCarrierCode()
 * @method  $this   setCarrierCode(string $code)
 * @method  string  getCarrierName()
 * @method  $this   setCarrierName(string $name)
 * @method  string  getCarrierUrl()
 * @method  $this   setCarrierUrl(string $url)
 * @method  string  getTrackingNumber()
 * @method  $this   setTrackingNumber(string $trackingNumber)
 */
class OrderTrackingInfo extends MiraklObject
{}