<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shop;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shop\ShopApplicableTax;

/**
 * @method  ShopApplicableTax   current()
 * @method  ShopApplicableTax   first()
 * @method  ShopApplicableTax   get($offset)
 * @method  ShopApplicableTax   offsetGet($offset)
 * @method  ShopApplicableTax   last()
 */
class ShopApplicableTaxCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShopApplicableTax::class;
}