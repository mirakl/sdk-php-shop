<?php
namespace Mirakl\MMP\Common\Request\Shipment;

/**
 * (ST26) Validate shipments as ready to pick up
 */
abstract class AbstractReadyForPickUpShipmentRequest extends AbstractShipmentsWorkflowRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shipments/ready_for_pick_up';
}