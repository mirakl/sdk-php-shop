<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shipment;

class ShipmentStatus
{
    public const SHIPPING          = 'SHIPPING';          // Initial state
    public const READY_FOR_PICK_UP = 'READY_FOR_PICK_UP'; // The shipment is ready for pick up for the operator, only available for "delivery by operator" orders
    public const SHIPMENT_PREPARED = 'SHIPMENT_PREPARED'; // The shipment is prepared and waiting for payment, only available for "pay per shipment" orders
    public const SHIPPED           = 'SHIPPED';           // The shipment has been sent by the shop
    public const TO_COLLECT        = 'TO_COLLECT';        // The shipment is available for collection in the operator shop by the customer
    public const RECEIVED          = 'RECEIVED';          // The shipment has been received by the customer
    public const CLOSED            = 'CLOSED';            // The shipment is closed
    public const CANCELED          = 'CANCELED';          // The shipment has been canceled
}
