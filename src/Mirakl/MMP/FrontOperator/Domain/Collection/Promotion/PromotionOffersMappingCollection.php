<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Promotion;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Promotion\PromotionOffersMapping;

/**
 * @method  PromotionOffersMapping   current()
 * @method  PromotionOffersMapping   first()
 * @method  PromotionOffersMapping   get($offset)
 * @method  PromotionOffersMapping   offsetGet($offset)
 * @method  PromotionOffersMapping   last()
 */
class PromotionOffersMappingCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = PromotionOffersMapping::class;
}