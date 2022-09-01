<?php
namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\DeletedShipmentSuccessCollection;
use Mirakl\MMP\Common\Domain\Collection\Shipment\DeletedShipmentErrorCollection;

/**
 * @method  DeletedShipmentErrorCollection    getShipmentErrors()
 * @method  $this                             setShipmentErrors(array|DeletedShipmentErrorCollection $errorCollection)
 * @method  DeletedShipmentSuccessCollection  getShipmentSuccess()
 * @method  $this                             setShipmentSuccess(array|DeletedShipmentSuccessCollection $shipmentCollection)
 */
class DeletedShipments extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipment_errors'  => [DeletedShipmentErrorCollection::class, 'create'],
        'shipment_success' => [DeletedShipmentSuccessCollection::class, 'create'],
    ];
}