<?php
namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ItemToShipLineCollection;
use Mirakl\MMP\Common\Domain\Fulfillment\Fulfillment;
use Mirakl\MMP\Common\Domain\Order\OrderReferences;
use Mirakl\MMP\Common\Domain\Order\ShopCustomerShippingAddress;

/**
 * @method  Fulfillment                  getFulfillment()
 * @method  $this                        setFulfillment(Fulfillment|array $fulfillment)
 * @method  string                       getOrderId()
 * @method  $this                        setOrderId(string $orderId)
 * @method  OrderReferences              getReferences()
 * @method  $this                        setReferences(OrderReferences|array $orderReferences)
 * @method  ItemToShipLineCollection     getShipmentLines()
 * @method  $this                        setShipmentLines(ItemToShipLineCollection|array $shipmentLines)
 * @method  ShopCustomerShippingAddress  getShippingAddress()
 * @method  $this                        setShippingAddress(ShopCustomerShippingAddress|array $shippingAddress)
 * @method  \DateTime                    getShippingDate()
 * @method  $this                        setShippingDate(\DateTime $shippingDate)
 * @method  \DateTime                    getShippingDeadline()
 * @method  $this                        setShippingDeadline(\DateTime $shippingDeadline)
 * @method  string                       getShippingTypeCode()
 * @method  $this                        setShippingTypeCode(string $shippingTypeCode)
 */
class AbstractItemToShip extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'fulfillment'      => [Fulfillment::class, 'create'],
        'references'       => [OrderReferences::class, 'create'],
        'shipment_lines'   => [ItemToShipLineCollection::class, 'create'],
        'shipping_address' => [ShopCustomerShippingAddress::class, 'create'],
    ];
}