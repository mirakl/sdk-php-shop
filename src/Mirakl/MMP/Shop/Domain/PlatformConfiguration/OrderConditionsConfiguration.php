<?php
namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method bool  getIsLeadTimeToShip() // Allow sellers to inform a lead time to ship on their offers
 * @method $this setIsLeadTimeToShip(bool $isLeadTimeToShip)
 * @method bool  getIsMaximumOrderQuantity() // Allow sellers to request for a maximum order quantity
 * @method $this setIsMaximumOrderQuantity(bool $isMaximumOrderQuantity)
 * @method bool  getIsMinimumOrderQuantity() // Allow sellers to request for a minimum order quantity
 * @method $this setIsMinimumOrderQuantity(bool $isMinimumOrderQuantity)
 * @method bool  getIsPackageOrderQuantity() // Allow sellers to set an order quantity increment
 * @method $this setIsPackageOrderQuantity(bool $isPackageOrderQuantity)
 */
class OrderConditionsConfiguration extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'lead_time_to_ship'      => 'is_lead_time_to_ship',
        'maximum_order_quantity' => 'is_maximum_order_quantity',
        'minimum_order_quantity' => 'is_minimum_order_quantity',
        'package_order_quantity' => 'is_package_order_quantity',
    ];
}