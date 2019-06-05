<?php
namespace Mirakl\MMP\Common\Domain\Reason;

class ReasonType
{
    const INCIDENT_OPEN   = 'INCIDENT_OPEN';
    const INCIDENT_CLOSE  = 'INCIDENT_CLOSE';
    const REFUND          = 'REFUND';
    const ORDER_MESSAGING = 'ORDER_MESSAGING';
    const OFFER_MESSAGING = 'OFFER_MESSAGING';
    const CANCELATION     = 'CANCELATION';
    const CANCELED        = 'CANCELED';
    const REFUSED         = 'REFUSED';

    /**
     * @deprecated
     */
    const MESSAGING       = 'MESSAGING';
}