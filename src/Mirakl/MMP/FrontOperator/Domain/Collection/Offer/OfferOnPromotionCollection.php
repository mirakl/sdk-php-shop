<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Offer;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Promotion\OfferOnPromotion;

/**
 * @method  OfferOnPromotion   current()
 * @method  OfferOnPromotion   first()
 * @method  OfferOnPromotion   get($offset)
 * @method  OfferOnPromotion   offsetGet($offset)
 * @method  OfferOnPromotion   last()
 */
class OfferOnPromotionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OfferOnPromotion::class;
}