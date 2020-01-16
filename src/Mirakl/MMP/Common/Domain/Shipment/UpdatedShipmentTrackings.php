<?php
namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\UpdatedShipmentTrackingErrorCollection;
use Mirakl\MMP\Common\Domain\Collection\Shipment\UpdatedShipmentTrackingSuccessCollection;

/**
 * @method  UpdatedShipmentTrackingErrorCollection      getShipmentErrors()
 * @method  $this                                       setShipmentErrors(array|UpdatedShipmentTrackingErrorCollection $errors)
 * @method  UpdatedShipmentTrackingSuccessCollection    getShipmentSuccess()
 * @method  $this                                       setShipmentSuccess(array|UpdatedShipmentTrackingSuccessCollection $shipments)
 */
class UpdatedShipmentTrackings extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipment_errors'  => [UpdatedShipmentTrackingErrorCollection::class, 'create'],
        'shipment_success' => [UpdatedShipmentTrackingSuccessCollection::class, 'create'],
    ];
}