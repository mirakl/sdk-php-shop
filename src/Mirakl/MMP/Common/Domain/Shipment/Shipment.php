<?php
namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentLineCollection;

/**
 * @method  string                  getId()
 * @method  $this                   setId(string $id)
 * @method  string                  getOrderId()
 * @method  $this                   setOrderId(string $orderId)
 * @method  ShipmentLineCollection  getShipmentLines()
 * @method  $this                   setShipmentLines(array|ShipmentLineCollection $shipmentLines)
 * @method  string                  getStatus()
 * @method  $this                   setStatus(string $status)
 * @method  ShipmentTracking        getTracking()
 * @method  $this                   setTracking(array|ShipmentTracking $tracking)
 */
class Shipment extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipment_lines' => [ShipmentLineCollection::class, 'create'],
        'tracking'       => [ShipmentTracking::class, 'create'],
    ];
}