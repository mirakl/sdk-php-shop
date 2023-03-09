<?php
namespace Mirakl\MMP\Common\Domain\Collection\Promotion;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Promotion\PromotionTrigger;

/**
 * @method PromotionTrigger current()
 * @method PromotionTrigger first()
 * @method PromotionTrigger get($offset)
 * @method PromotionTrigger offsetGet($offset)
 * @method PromotionTrigger last()
 */
class PromotionTriggerCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = PromotionTrigger::class;
}