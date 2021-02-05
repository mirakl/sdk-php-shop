<?php
namespace Mirakl\MMP\Common\Domain\Collection\Promotion;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Promotion\AppliedPromotion;

/**
 * @method  AppliedPromotion    current()
 * @method  AppliedPromotion    first()
 * @method  AppliedPromotion    get($offset)
 * @method  AppliedPromotion    offsetGet($offset)
 * @method  AppliedPromotion    last()
 */
class AppliedPromotionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AppliedPromotion::class;
}