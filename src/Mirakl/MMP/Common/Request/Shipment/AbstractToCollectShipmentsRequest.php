<?php
namespace Mirakl\MMP\Common\Request\Shipment;

/**
 * (ST27) Validate the receipt of "Click & Collect" shipments in an operator store (limited to 1000 shipments at a time)
 */
abstract class AbstractToCollectShipmentsRequest extends AbstractShipmentsWorkflowRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shipments/to_collect';
}