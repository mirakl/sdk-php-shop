<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipment\Workflow;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\Workflow\ShipmentWorkflowSuccess;

/**
 * @method  ShipmentWorkflowSuccess current()
 * @method  ShipmentWorkflowSuccess first()
 * @method  ShipmentWorkflowSuccess get($offset)
 * @method  ShipmentWorkflowSuccess offsetGet($offset)
 * @method  ShipmentWorkflowSuccess last()
 */
class ShipmentWorkflowSuccessCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShipmentWorkflowSuccess::class;
}