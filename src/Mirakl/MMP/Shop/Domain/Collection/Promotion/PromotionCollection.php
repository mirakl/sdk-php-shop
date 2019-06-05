<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Promotion;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Promotion\Promotion;

/**
 * @method  Promotion   current()
 * @method  Promotion   first()
 * @method  Promotion   get($offset)
 * @method  Promotion   offsetGet($offset)
 * @method  Promotion   last()
 */
class PromotionCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Promotion::class;
}