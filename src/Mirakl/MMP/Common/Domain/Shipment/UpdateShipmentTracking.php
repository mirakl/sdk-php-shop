<?php
namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string              getId()
 * @method  $this               setId(string $id)
 * @method  ShipmentTracking    getTracking()
 * @method  $this               setTracking(array|ShipmentTracking $tracking)
 */
class UpdateShipmentTracking extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'tracking' => [ShipmentTracking::class, 'create'],
    ];
}