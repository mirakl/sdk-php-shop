<?php
namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getCarrierName()
 * @method  $this   setCarrierName(string $carrierName)
 * @method  string  getCarrierCode()
 * @method  $this   setCarrierCode(string $carrierCode)
 * @method  string  getTrackingNumber()
 * @method  $this   setTrackingNumber(string $trackingNumber)
 * @method  string  getTrackingUrl()
 * @method  $this   setTrackingUrl(string $trackingUrl)
 */
class ShipmentTracking extends MiraklObject
{}