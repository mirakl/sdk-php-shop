<?php
namespace Mirakl\MMP\Common\Domain\Reason;

class ReasonType
{
    const INCIDENT_OPEN       = 'INCIDENT_OPEN';
    const MPS_INCIDENT_OPEN   = 'MPS_INCIDENT_OPEN';
    const INCIDENT_CLOSE      = 'INCIDENT_CLOSE';
    const MPS_INCIDENT_CLOSE  = 'MPS_INCIDENT_CLOSE';
    const REFUND              = 'REFUND';
    const MPS_REFUND          = 'MPS_REFUND';
    const ORDER_MESSAGING     = 'ORDER_MESSAGING';
    const MPS_ORDER_MESSAGING = 'MPS_ORDER_MESSAGING';
    const OFFER_MESSAGING     = 'OFFER_MESSAGING';
    const MPS_OFFER_MESSAGING = 'MPS_OFFER_MESSAGING';
    const CANCELATION         = 'CANCELATION';
    const CANCELED            = 'CANCELED';
    const REFUSED             = 'REFUSED';

    /**
     * @deprecated
     */
    const MESSAGING       = 'MESSAGING';
}