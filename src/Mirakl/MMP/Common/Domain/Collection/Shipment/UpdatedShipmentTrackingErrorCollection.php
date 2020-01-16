<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\UpdatedShipmentTrackingError;

/**
 * @method  UpdatedShipmentTrackingError    current()
 * @method  UpdatedShipmentTrackingError    first()
 * @method  UpdatedShipmentTrackingError    get($offset)
 * @method  UpdatedShipmentTrackingError    offsetGet($offset)
 * @method  UpdatedShipmentTrackingError    last()
 */
class UpdatedShipmentTrackingErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdatedShipmentTrackingError::class;
}