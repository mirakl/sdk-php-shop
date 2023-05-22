<?php
namespace Mirakl\MMP\Common\Domain\Offer\Shipping;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method int       getEarliestDays()
 * @method $this     setEarliestDays(int $days)
 * @method int       getLatestDays()
 * @method $this     setLatestDays(int $days)
 * @method \DateTime getEarliestDeliveryDate()
 * @method $this     setEarliestDeliveryDate(\DateTime $earliestDeliveryDate)
 * @method \DateTime getLatestDeliveryDate()
 * @method $this     setLatestDeliveryDate(\DateTime $latestDeliveryDate)
 */
class DeliveryTime extends MiraklObject
{}