<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentAdditionalInformationCollection;
use Mirakl\MMP\Common\Domain\Collection\Shipment\ShipmentLineCollection;

/**
 * @method string                                  getInvoiceReference()
 * @method $this                                   setInvoiceReference(string $invoiceReference)
 * @method string                                  getOrderId()
 * @method $this                                   setOrderId(string $orderId)
 * @method ShipmentAdditionalInformationCollection getShipmentAdditionalInformation()
 * @method $this                                   setShipmentAdditionalInformation(array|ShipmentAdditionalInformationCollection $shipmentAdditionalInformation)
 * @method ShipmentLineCollection                  getShipmentLines()
 * @method $this                                   setShipmentLines(array|ShipmentLineCollection $shipmentLines)
 * @method bool                                    getShipped()
 * @method $this                                   setShipped(bool $shipped)
 * @method ShippingFrom                            getShippingFrom()
 * @method $this                                   setShippingFrom(array|ShippingFrom $shippingFrom)
 * @method ShipmentTracking                        getTracking()
 * @method $this                                   setTracking(array|ShipmentTracking $tracking)
 */
class CreateShipment extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'shipment_additional_information' => [ShipmentAdditionalInformationCollection::class, 'create'],
        'shipment_lines'                  => [ShipmentLineCollection::class, 'create'],
        'shipping_from'                   => [ShippingFrom::class, 'create'],
        'tracking'                        => [ShipmentTracking::class, 'create'],
    ];
}
