<?php
namespace Mirakl\MMP\Common\Domain\Payment;

class PaymentWorkflow
{
    /**
     * Represents a payment workflow where the payment is done just after
     * the order has been (fully or partially) accepted by the shop.
     */
    const PAY_ON_ACCEPTANCE = 'PAY_ON_ACCEPTANCE';

    /**
     * Represents a payment workflow where the payment is done at the
     * latest when the order is waiting for collection.
     */
    const PAY_ON_DELIVERY = 'PAY_ON_DELIVERY';

    /**
     * Represents a payment workflow where the payment is done after
     * a given delay (due date).
     */
    const PAY_ON_DUE_DATE = 'PAY_ON_DUE_DATE';

    /**
     * Represents an order workflow where the payment is done after
     * the shipment has been prepared.
     */
    const PAY_ON_SHIPMENT = 'PAY_ON_SHIPMENT';

    /**
     * Represents an order workflow where the payment status is never sent to Mirakl.
     */
    const NO_CUSTOMER_PAYMENT_CONFIRMATION = 'NO_CUSTOMER_PAYMENT_CONFIRMATION';
}