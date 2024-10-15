<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method ShipmentTrackingOccurrenceDate getOccurrenceDate()
 * @method $this                          setOccurrenceDate(ShipmentTrackingOccurrenceDate|array $occurrenceDate)
 * @method string                         getType()
 * @method $this                          setType(string $type)
 */
class ShipmentTrackingTag extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'occurrence_date' => [ShipmentTrackingOccurrenceDate::class, 'create'],
    ];
}
