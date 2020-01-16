<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipment\Workflow;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\Workflow\ShipmentWorkflowError;

/**
 * @method  ShipmentWorkflowError   current()
 * @method  ShipmentWorkflowError   first()
 * @method  ShipmentWorkflowError   get($offset)
 * @method  ShipmentWorkflowError   offsetGet($offset)
 * @method  ShipmentWorkflowError   last()
 */
class ShipmentWorkflowErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShipmentWorkflowError::class;
}