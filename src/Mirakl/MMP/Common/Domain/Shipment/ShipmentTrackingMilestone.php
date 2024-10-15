<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method ShipmentTrackingTag            getAdditionalInfo()
 * @method $this                          setAdditionalInfo(ShipmentTrackingTag|array $additionalInfo)
 * @method ShipmentTrackingOccurrenceDate getOccurrenceDate()
 * @method $this                          setOccurrenceDate(ShipmentTrackingOccurrenceDate|array $occurrenceDate)
 * @method string                         getType()
 * @method $this                          setType(string $type)
 */
class ShipmentTrackingMilestone extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'additional_info' => [ShipmentTrackingTag::class, 'create'],
        'occurrence_date' => [ShipmentTrackingOccurrenceDate::class, 'create'],
    ];
}
