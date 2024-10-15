<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentTrackingMilestoneCollection;

/**
 * @method string                              getCarrierCode()
 * @method $this                               setCarrierCode(string $carrierCode)
 * @method string                              getCarrierName()
 * @method $this                               setCarrierName(string $carrierName)
 * @method string                              getCarrierStandardCode()
 * @method $this                               setCarrierStandardCode(string $carrierStandardCode)
 * @method ShipmentTrackingLastKnownLocation   getLastKnownLocation()
 * @method $this                               setLastKnownLocation(ShipmentTrackingLastKnownLocation|array $lastKnownLocation)
 * @method ShipmentTrackingMilestoneCollection getMilestones()
 * @method $this                               setMilestones(ShipmentTrackingMilestoneCollection|array $milestones)
 * @method string                              getTrackingNumber()
 * @method $this                               setTrackingNumber(string $trackingNumber)
 * @method string                              getTrackingUrl()
 * @method $this                               setTrackingUrl(string $trackingUrl)
 * @method string                              getValidityStatus()
 * @method $this                               setValidityStatus(string $validityStatus)
 */
class ShipmentTracking extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'last_known_location' => [ShipmentTrackingLastKnownLocation::class, 'create'],
        'milestones'          => [ShipmentTrackingMilestoneCollection::class, 'create'],
    ];
}
