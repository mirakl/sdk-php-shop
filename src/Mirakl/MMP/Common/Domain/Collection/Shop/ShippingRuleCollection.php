<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shop;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shop\ShippingRule;

/**
 * @method  ShippingRule    current()
 * @method  ShippingRule    first()
 * @method  ShippingRule    get($offset)
 * @method  ShippingRule    offsetGet($offset)
 * @method  ShippingRule    last()
 */
class ShippingRuleCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShippingRule::class;
}