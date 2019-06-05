<?php
namespace Mirakl\MMP\Common\Domain\Promotion;

use Mirakl\MMP\FrontOperator\Domain\Collection\Offer\OfferOnPromotionCollection;

/**
 * @method  OfferOnPromotionCollection              getOffers()
 * @method  $this                                   setOffers(OfferOnPromotionCollection $offers)
 * @method  string                                  getShopId()
 * @method  $this                                   setShopId(string $shopId)
 * @method  int                                     getTotalCount()
 * @method  $this                                   setTotalCount(int $totalCount)
 */
abstract class AbstractPromotionWithOffers extends AbstractPromotion
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'offers' => [OfferOnPromotionCollection::class, 'create'],
    ];
}