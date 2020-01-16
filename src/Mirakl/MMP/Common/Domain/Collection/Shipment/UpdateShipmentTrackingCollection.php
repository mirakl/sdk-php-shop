<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\ShipmentTracking;

/**
 * @method  ShipmentTracking    current()
 * @method  ShipmentTracking    first()
 * @method  ShipmentTracking    get($offset)
 * @method  ShipmentTracking    offsetGet($offset)
 * @method  ShipmentTracking    last()
 */
class UpdateShipmentTrackingCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShipmentTracking::class;
}