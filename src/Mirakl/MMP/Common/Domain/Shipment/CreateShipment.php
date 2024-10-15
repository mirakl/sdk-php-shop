<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentLineCollection;

/**
 * @method string                 getInvoiceReference()
 * @method $this                  setInvoiceReference(string $invoiceReference)
 * @method string                 getOrderId()
 * @method $this                  setOrderId(string $orderId)
 * @method bool                   getShipped()
 * @method $this                  setShipped(bool $shipped)
 * @method ShipmentLineCollection getShipmentLines()
 * @method $this                  setShipmentLines(ShipmentLineCollection|array $shipmentLines)
 * @method ShipmentTracking       getTracking()
 * @method $this                  setTracking(ShipmentTracking|array $tracking)
 */
class CreateShipment extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipment_lines' => [ShipmentLineCollection::class, 'create'],
        'tracking'       => [ShipmentTracking::class, 'create'],
    ];
}
