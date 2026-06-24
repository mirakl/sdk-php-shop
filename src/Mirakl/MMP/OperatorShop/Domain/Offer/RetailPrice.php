<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Offer;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method \DateTime getDiscountEndDate()
 * @method $this     setDiscountEndDate(\DateTime $discountEndDate)
 * @method \DateTime getDiscountStartDate()
 * @method $this     setDiscountStartDate(\DateTime $discountStartDate)
 * @method float     getUnitDiscountPrice()
 * @method $this     setUnitDiscountPrice(float $unitDiscountPrice)
 * @method float     getUnitOriginPrice()
 * @method $this     setUnitOriginPrice(float $unitOriginPrice)
 */
class RetailPrice extends MiraklObject
{
}
