<?php
namespace Mirakl\MMP\Common\Domain\Collection\Promotion;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Promotion\PromotionPublicDescription;

/**
 * @method  PromotionPublicDescription  current()
 * @method  PromotionPublicDescription  first()
 * @method  PromotionPublicDescription  get($offset)
 * @method  PromotionPublicDescription  offsetGet($offset)
 * @method  PromotionPublicDescription  last()
 */
class PromotionPublicDescriptionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = PromotionPublicDescription::class;
}