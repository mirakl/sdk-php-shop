<?php
namespace Mirakl\MMP\Common\Domain\Collection\Promotion;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Promotion\PromotionChannel;

/**
 * @method  PromotionChannel  current()
 * @method  PromotionChannel  first()
 * @method  PromotionChannel  get($offset)
 * @method  PromotionChannel  offsetGet($offset)
 * @method  PromotionChannel  last()
 */
class PromotionChannelCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = PromotionChannel::class;
}