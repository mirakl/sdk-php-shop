<?php
namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method bool  getIsMultiShipment() // Allow sellers to create several shipments for a same order
 * @method $this setIsMultiShipment(bool $isMultiShipment)
 * @method bool  getIsMultiPartItemShipment() // Allow sellers to create several packages for a same item in an order
 * @method $this setIsMultiPartItemShipment(bool $isMultiPartItemShipment)
 */
class ShipmentConfiguration extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'multi_shipment'           => 'is_multi_shipment',
        'multi_part_item_shipment' => 'is_multi_part_item_shipment',
    ];
}