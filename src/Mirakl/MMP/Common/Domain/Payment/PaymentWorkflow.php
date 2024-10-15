<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Payment;

class PaymentWorkflow
{
    /**
     * Represents a payment workflow where the payment is done just after
     * the order has been (fully or partially) accepted by the shop.
     */
    public const PAY_ON_ACCEPTANCE = 'PAY_ON_ACCEPTANCE';

    /**
     * Represents a payment workflow where the payment is done at the
     * latest when the order is waiting for collection.
     */
    public const PAY_ON_DELIVERY = 'PAY_ON_DELIVERY';

    /**
     * Represents a payment workflow where the payment is done after
     * a given delay (due date).
     */
    public const PAY_ON_DUE_DATE = 'PAY_ON_DUE_DATE';

    /**
     * Represents an order workflow where the payment is done after
     * the shipment has been prepared.
     */
    public const PAY_ON_SHIPMENT = 'PAY_ON_SHIPMENT';

    /**
     * Represents an order workflow where the payment status is never sent to Mirakl.
     */
    public const NO_CUSTOMER_PAYMENT_CONFIRMATION = 'NO_CUSTOMER_PAYMENT_CONFIRMATION';
}
