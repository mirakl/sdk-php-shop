<?php
namespace Mirakl\MMP\Common\Domain\Collection\Promotion;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Promotion\PromotionMedia;

/**
 * @method  PromotionMedia  current()
 * @method  PromotionMedia  first()
 * @method  PromotionMedia  get($offset)
 * @method  PromotionMedia  offsetGet($offset)
 * @method  PromotionMedia  last()
 */
class PromotionMediaCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = PromotionMedia::class;
}