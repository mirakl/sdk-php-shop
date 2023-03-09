<?php
namespace Mirakl\MMP\Common\Domain\Shipment;

class ShipmentStatus
{
    const SHIPPING          = 'SHIPPING';          // Initial state
    const READY_FOR_PICK_UP = 'READY_FOR_PICK_UP'; // The shipment is ready for pick up for the operator, only available for "delivery by operator" orders
    const SHIPMENT_PREPARED = 'SHIPMENT_PREPARED'; // The shipment is prepared and waiting for payment, only available for "pay per shipment" orders
    const SHIPPED           = 'SHIPPED';           // The shipment has been sent by the shop
    const TO_COLLECT        = 'TO_COLLECT';        // The shipment is available for collection in the operator shop by the customer
    const RECEIVED          = 'RECEIVED';          // The shipment has been received by the customer
    const CLOSED            = 'CLOSED';            // The shipment is closed
    const CANCELED          = 'CANCELED';          // The shipment has been canceled
}