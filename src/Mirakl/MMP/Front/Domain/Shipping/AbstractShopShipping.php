<?php
namespace Mirakl\MMP\Front\Domain\Shipping;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Promotion\OrderPromotionsSummary;

/**
 * @method  string                  getCurrencyIsoCode()
 * @method  $this                   setCurrencyIsoCode(string $currencyIsoCode)
 * @method  int                     getLeadtimeToShip()
 * @method  $this                   setLeadtimeToShip(int $leadtimeToShip)
 * @method  OrderPromotionsSummary  getPromotions()
 * @method  $this                   setPromotions(array|OrderPromotionsSummary $promotions)
 * @method  string                  getShopId()
 * @method  $this                   setShopId(string $shopId)
 * @method  string                  getShopName()
 * @method  $this                   setShopName(string $shopName)
 */
abstract class AbstractShopShipping extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'promotions' => [OrderPromotionsSummary::class, 'create'],
    ];
}