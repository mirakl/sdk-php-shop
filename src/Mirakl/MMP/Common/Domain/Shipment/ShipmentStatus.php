<?php
namespace Mirakl\MMP\Common\Domain\Shipment;

class ShipmentStatus
{
    const SHIPPING   = 'SHIPPING';   // Initial state
    const SHIPPED    = 'SHIPPED';    // The shipment has been sent by the shop
    const TO_COLLECT = 'TO_COLLECT'; // The shipment is available for collection in the operator shop by the customer
    const RECEIVED   = 'RECEIVED';   // The shipment has been received by the customer
    const CLOSED     = 'CLOSED';     // The shipment is closed
    const CANCELED   = 'CANCELED';   // The shipment has been canceled
}