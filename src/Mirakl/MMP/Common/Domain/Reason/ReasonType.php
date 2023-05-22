<?php
namespace Mirakl\MMP\Common\Domain\Reason;

class ReasonType
{
    const CANCELATION          = 'CANCELATION';
    const CANCELED             = 'CANCELED';
    const INCIDENT_OPEN        = 'INCIDENT_OPEN';
    const INCIDENT_CLOSE       = 'INCIDENT_CLOSE';
    const MMP_SELLER_MESSAGING = 'MMP_SELLER_MESSAGING';
    const MPS_INCIDENT_OPEN    = 'MPS_INCIDENT_OPEN';
    const MPS_INCIDENT_CLOSE   = 'MPS_INCIDENT_CLOSE';
    const MPS_OFFER_MESSAGING  = 'MPS_OFFER_MESSAGING';
    const MPS_ORDER_MESSAGING  = 'MPS_ORDER_MESSAGING';
    const MPS_SELLER_MESSAGING = 'MPS_SELLER_MESSAGING';
    const MPS_REFUND           = 'MPS_REFUND';
    const OFFER_MESSAGING      = 'OFFER_MESSAGING';
    const ORDER_MESSAGING      = 'ORDER_MESSAGING';
    const REFUND               = 'REFUND';
    const REFUSED              = 'REFUSED';

    /**
     * @deprecated
     */
    const MESSAGING = 'MESSAGING';
}