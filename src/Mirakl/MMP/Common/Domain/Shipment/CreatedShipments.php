<?php
namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentCollection;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentErrorCollection;

/**
 * @method  ShipmentErrorCollection getShipmentErrors()
 * @method  $this                   setShipmentErrors(array|ShipmentErrorCollection $errors)
 * @method  ShipmentCollection      getShipmentSuccess()
 * @method  $this                   setShipmentSuccess(array|ShipmentCollection $shipments)
 */
class CreatedShipments extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipment_errors'  => [ShipmentErrorCollection::class, 'create'],
        'shipment_success' => [ShipmentCollection::class, 'create'],
    ];
}