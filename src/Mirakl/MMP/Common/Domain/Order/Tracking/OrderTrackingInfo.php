<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order\Tracking;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string getCarrierCode()
 * @method $this  setCarrierCode(string $carrierCode)
 * @method string getCarrierName()
 * @method $this  setCarrierName(string $carrierName)
 * @method string getCarrierStandardCode()
 * @method $this  setCarrierStandardCode(string $carrierStandardCode)
 * @method string getCarrierUrl()
 * @method $this  setCarrierUrl(string $carrierUrl)
 * @method string getTrackingNumber()
 * @method $this  setTrackingNumber(string $trackingNumber)
 */
class OrderTrackingInfo extends MiraklObject
{
}
