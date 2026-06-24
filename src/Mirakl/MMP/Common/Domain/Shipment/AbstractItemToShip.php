<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ItemToShipLineCollection;
use Mirakl\MMP\Common\Domain\Fulfillment\Fulfillment;
use Mirakl\MMP\Common\Domain\Order\OrderReferences;
use Mirakl\MMP\Common\Domain\Order\ShopCustomerShippingAddress;

/**
 * @method Fulfillment                 getFulfillment()
 * @method $this                       setFulfillment(array|Fulfillment $fulfillment)
 * @method string                      getOrderId()
 * @method $this                       setOrderId(string $orderId)
 * @method OrderReferences             getReferences()
 * @method $this                       setReferences(array|OrderReferences $orderReferences)
 * @method ItemToShipLineCollection    getShipmentLines()
 * @method $this                       setShipmentLines(array|ItemToShipLineCollection $shipmentLines)
 * @method ShopCustomerShippingAddress getShippingAddress()
 * @method $this                       setShippingAddress(array|ShopCustomerShippingAddress $shippingAddress)
 * @method \DateTime                   getShippingDate()
 * @method $this                       setShippingDate(\DateTime $shippingDate)
 * @method \DateTime                   getShippingDeadline()
 * @method $this                       setShippingDeadline(\DateTime $shippingDeadline)
 * @method string                      getShippingTypeCode()
 * @method $this                       setShippingTypeCode(string $shippingTypeCode)
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
