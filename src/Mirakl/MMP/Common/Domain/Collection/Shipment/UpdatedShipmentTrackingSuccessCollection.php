<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\UpdatedShipmentTrackingSuccess;

/**
 * @method  UpdatedShipmentTrackingSuccess  current()
 * @method  UpdatedShipmentTrackingSuccess  first()
 * @method  UpdatedShipmentTrackingSuccess  get($offset)
 * @method  UpdatedShipmentTrackingSuccess  offsetGet($offset)
 * @method  UpdatedShipmentTrackingSuccess  last()
 */
class UpdatedShipmentTrackingSuccessCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdatedShipmentTrackingSuccess::class;
}