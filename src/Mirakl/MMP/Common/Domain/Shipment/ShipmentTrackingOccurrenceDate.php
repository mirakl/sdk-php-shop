<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method \DateTime getDate()
 * @method $this     setDate(\DateTime $date)
 * @method string    getOffset()
 * @method $this     setOffset(string $offset)
 * @method string    getTime()
 * @method $this     setTime(string $time)
 */
class ShipmentTrackingOccurrenceDate extends MiraklObject
{
    public function getDateTime()
    {
        $date = new \DateTime($this->getDate()->format('Y-m-d') . ' ' . $this->getTime());
        if ($this->getOffset()) {
            $date->setTimezone(new \DateTimeZone($this->getOffset()));
        }
        return $date;
    }
}
