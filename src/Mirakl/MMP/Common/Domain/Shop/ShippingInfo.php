<?php
namespace Mirakl\MMP\Common\Domain\Shop;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shop\ShippingRuleCollection;

/**
 * @method  bool                    getFreeShipping()   Indicate whether the shop is offering the shippings for all the customers on all his inventory
 * @method  $this                   setFreeShipping(bool $flag)
 * @method  string                  getShippingCountry()
 * @method  $this                   setShippingCountry(string $country)
 * @method  ShippingRuleCollection  getShippingRules()  All the pair shipping zone / shipping type accepted by the shop
 * @method  $this                   setShippingRules(array|ShippingRuleCollection $shippingRules)
 */
class ShippingInfo extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipping_rules' => [ShippingRuleCollection::class, 'create'],
    ];
}