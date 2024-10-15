<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order;

class OrderState
{
    /**
     * Initial order state.
     */
    public const STAGING               = 'STAGING';

    /**
     * Order has been validated by Acme and wait for shop input.
     */
    public const WAITING_ACCEPTANCE    = 'WAITING_ACCEPTANCE';

    /**
     * Shop has accepted order.
     */
    public const WAITING_DEBIT         = 'WAITING_DEBIT';

    /**
     * Mirakl asked the front operator sytem to debit the customer account.
     */
    public const WAITING_DEBIT_PAYMENT = 'WAITING_DEBIT_PAYMENT';

    /**
     * The order has been paid by the customer and is waiting for a shop input.
     */
    public const SHIPPING              = 'SHIPPING';

    /**
     * The order has been sent by the shop.
     */
    public const SHIPPED               = 'SHIPPED';

    /**
     * The order is available for collection in the operator shop by the customer.
     */
    public const TO_COLLECT            = 'TO_COLLECT';

    /**
     * The order has been received by the customer.
     */
    public const RECEIVED              = 'RECEIVED';

    /**
     * The order is closed.
     */
    public const CLOSED                = 'CLOSED';

    /**
     * Shop has refused the order.
     */
    public const REFUSED               = 'REFUSED';

    /**
     * The order has been canceled.
     */
    public const CANCELED              = 'CANCELED';

    /**
     * An incident on the order line has been opened.
     */
    public const INCIDENT_OPEN         = 'INCIDENT_OPEN';

    /**
     * An incident on the order line has been closed. (used only with the order history)
     */
    public const INCIDENT_CLOSED       = 'INCIDENT_CLOSED';

    /**
     * The order line has been refunded.
     */
    public const REFUNDED              = 'REFUNDED';
}
