<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipping;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method int       getEarliestDays()
 * @method $this     setEarliestDays(string $earliestDays)
 * @method int       getLatestDays()
 * @method $this     setLatestDays(string $latestDays)
 * @method \DateTime getEarliestDeliveryDate()
 * @method $this     setEarliestDeliveryDate(\DateTime $earliestDeliveryDate)
 * @method \DateTime getLatestDeliveryDate()
 * @method $this     setLatestDeliveryDate(\DateTime $latestDeliveryDate)
 */
class DeliveryTime extends MiraklObject
{
}
