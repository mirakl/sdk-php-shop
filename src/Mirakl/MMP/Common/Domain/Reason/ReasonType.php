<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Reason;

class ReasonType
{
    public const CANCELATION          = 'CANCELATION';
    public const CANCELED             = 'CANCELED';
    public const INCIDENT_OPEN        = 'INCIDENT_OPEN';
    public const INCIDENT_CLOSE       = 'INCIDENT_CLOSE';
    public const MMP_SELLER_MESSAGING = 'MMP_SELLER_MESSAGING';
    public const MPS_INCIDENT_OPEN    = 'MPS_INCIDENT_OPEN';
    public const MPS_INCIDENT_CLOSE   = 'MPS_INCIDENT_CLOSE';
    public const MPS_OFFER_MESSAGING  = 'MPS_OFFER_MESSAGING';
    public const MPS_ORDER_MESSAGING  = 'MPS_ORDER_MESSAGING';
    public const MPS_SELLER_MESSAGING = 'MPS_SELLER_MESSAGING';
    public const MPS_REFUND           = 'MPS_REFUND';
    public const OFFER_MESSAGING      = 'OFFER_MESSAGING';
    public const ORDER_MESSAGING      = 'ORDER_MESSAGING';
    public const REFUND               = 'REFUND';
    public const REFUSED              = 'REFUSED';
    public const RETURN               = 'RETURN';
    public const RETURN_REJECTION     = 'RETURN_REJECTION';

    /**
     * @deprecated
     */
    public const MESSAGING = 'MESSAGING';
}
