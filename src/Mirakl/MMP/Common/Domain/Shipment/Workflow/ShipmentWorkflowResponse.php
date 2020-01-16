<?php
namespace Mirakl\MMP\Common\Domain\Shipment\Workflow;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\Workflow\ShipmentWorkflowErrorCollection;
use Mirakl\MMP\Common\Domain\Collection\Shipment\Workflow\ShipmentWorkflowSuccessCollection;

/**
 * @method  ShipmentWorkflowErrorCollection     getShipmentErrors()
 * @method  $this                               setShipmentErrors(array|ShipmentWorkflowErrorCollection $errors)
 * @method  ShipmentWorkflowSuccessCollection   getShipmentSuccess()
 * @method  $this                               setShipmentSuccess(array|ShipmentWorkflowSuccessCollection $shipments)
 */
class ShipmentWorkflowResponse extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipment_errors'  => [ShipmentWorkflowErrorCollection::class, 'create'],
        'shipment_success' => [ShipmentWorkflowSuccessCollection::class, 'create'],
    ];
}