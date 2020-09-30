<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Shop\Location;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Shop\Location\ShopTaxLocation;

/**
 * @method  ShopTaxLocation    current()
 * @method  ShopTaxLocation    first()
 * @method  ShopTaxLocation    get($offset)
 * @method  ShopTaxLocation    offsetGet($offset)
 * @method  ShopTaxLocation    last()
 */
class ShopTaxLocationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShopTaxLocation::class;
}