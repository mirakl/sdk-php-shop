<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Promotion;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Promotion\PromotionIdentifier;

/**
 * @method  PromotionIdentifier current()
 * @method  PromotionIdentifier first()
 * @method  PromotionIdentifier get($offset)
 * @method  PromotionIdentifier offsetGet($offset)
 * @method  PromotionIdentifier last()
 */
class PromotionIdentifierCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = PromotionIdentifier::class;
}