<?php
namespace Mirakl\MMP\Common\Request\Shipment;

/**
 * (ST25) Validate shipments as received (limited to 1000 shipments at a time)
 */
abstract class AbstractReceiveShipmentsRequest extends AbstractShipmentsWorkflowRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shipments/receive';
}