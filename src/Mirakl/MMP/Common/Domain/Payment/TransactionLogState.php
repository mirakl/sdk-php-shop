<?php
namespace Mirakl\MMP\Common\Domain\Payment;

/**
 * Different payment states available for shop balance
 */
class TransactionLogState
{
    /**
     * The order has been paid by the customer but no received
     * Ther order has been paid and received by the customer but has an ongoing incident
     */
    const PENDING             = 'PENDING';

    /**
     * The order has been received by the customer and has no active incident.
     */
    const PAYABLE             = 'PAYABLE';

    /**
     * The transaction log is currently being processed by the payment batch
     * @deprecated Not used anymore, Transaction Log State now moves directly from TransactionLogState::PAYABLE to TransactionLogState::PAID
     */
    const PAYMENT_IN_PROGRESS = 'PAYMENT_IN_PROGRESS';

    /**
     * The order has been paid to the shop
     */
    const PAID                = 'PAID';

    /**
     * The transaction log has an informative role (only used when amountBreakdown module is enabled)
     */
    const NOT_APPLICABLE      = 'NOT_APPLICABLE';
}