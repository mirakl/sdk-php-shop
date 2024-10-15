<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Shipment;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipment\ShipmentTrackingMilestone;

/**
 * @method ShipmentTrackingMilestone current()
 * @method ShipmentTrackingMilestone first()
 * @method ShipmentTrackingMilestone get($offset)
 * @method ShipmentTrackingMilestone offsetGet($offset)
 * @method ShipmentTrackingMilestone last()
 */
class ShipmentTrackingMilestoneCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShipmentTrackingMilestone::class;
}
