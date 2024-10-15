<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Offer;

/**
 * @method int    getShopId()
 * @method $this  setShopId(int $shopId)
 * @method float  getShopGrade()
 * @method $this  setShopGrade(float $shopGrade)
 * @method string getShopName()
 * @method $this  setShopName(string $shopName)
 */
abstract class AbstractOfferWithShopInfo extends AbstractOffer
{
}
