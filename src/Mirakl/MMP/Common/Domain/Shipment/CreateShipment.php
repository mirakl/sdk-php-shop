<?php
namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentLineCollection;

/**
 * @method  string  getOrderId()
 * @method  $this   setOrderId(string $orderId)
 * @method  bool    getShipped()
 * @method  $this   setShipped(bool $shipped)
 * @method  bool    getShipmentLines()
 * @method  $this   setShipmentLines(array|ShipmentLineCollection $shipmentLines)
 * @method  bool    getTracking()
 * @method  $this   setTracking(array|ShipmentTracking $tracking)
 */
class CreateShipment extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipment_lines' => [ShipmentLineCollection::class, 'create'],
        'tracking'       => [ShipmentTracking::class, 'create'],
    ];
}