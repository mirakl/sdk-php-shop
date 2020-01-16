<?php
namespace Mirakl\MMP\Common\Request\Shipment;

/**
 * (ST24) Validate shipments as shipped (limited to 1000 shipments at a time)
 */
abstract class AbstractShipShipmentsRequest extends AbstractShipmentsWorkflowRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shipments/ship';
}