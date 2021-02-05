<?php
namespace Mirakl\MMP\Common\Domain\Order;

class OrderState
{
    /**
     * Initial order state.
     */
    const STAGING               = 'STAGING';

    /**
     * Order has been validated by Acme and wait for shop input.
     */
    const WAITING_ACCEPTANCE    = 'WAITING_ACCEPTANCE';

    /**
     * Shop has accepted order.
     */
    const WAITING_DEBIT         = 'WAITING_DEBIT';

    /**
     * Mirakl asked the front operator sytem to debit the customer account.
     */
    const WAITING_DEBIT_PAYMENT = 'WAITING_DEBIT_PAYMENT';

    /**
     * The order has been paid by the customer and is waiting for a shop input.
     */
    const SHIPPING              = 'SHIPPING';

    /**
     * The order has been sent by the shop.
     */
    const SHIPPED               = 'SHIPPED';

    /**
     * The order is available for collection in the operator shop by the customer.
     */
    const TO_COLLECT            = 'TO_COLLECT';

    /**
     * The order has been received by the customer.
     */
    const RECEIVED              = 'RECEIVED';

    /**
     * The order is closed.
     */
    const CLOSED                = 'CLOSED';

    /**
     * Shop has refused the order.
     */
    const REFUSED               = 'REFUSED';

    /**
     * The order has been canceled.
     */
    const CANCELED              = 'CANCELED';

    /**
     * An incident on the order line has been opened.
     */
    const INCIDENT_OPEN         = 'INCIDENT_OPEN';

    /**
     * An incident on the order line has been closed. (used only with the order history)
     */
    const INCIDENT_CLOSED       = 'INCIDENT_CLOSED';

    /**
     * The order line has been refunded.
     */
    const REFUNDED              = 'REFUNDED';
}