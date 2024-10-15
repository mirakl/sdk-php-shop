<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string                         getLocation()
 * @method $this                          setLocation(string $location)
 * @method ShipmentTrackingOccurrenceDate getOccurrenceDate()
 * @method $this                          setOccurrenceDate(ShipmentTrackingOccurrenceDate|array $occurrenceDate)
 */
class ShipmentTrackingLastKnownLocation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'occurrence_date' => [ShipmentTrackingOccurrenceDate::class, 'create'],
    ];
}
