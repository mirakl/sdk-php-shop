<?php
namespace Mirakl\MMP\Common\Domain\Payment\Transaction;

class TransactionLogState
{
    /**
     * The order has been paid by the customer but not received
     * The order has been paid and received by the customer but has an ongoing incident
     */
    const PENDING = 'PENDING';

    /**
     * The order has been received by the customer and has no active incident.
     */
    const PAYABLE = 'PAYABLE';

    /**
     * @deprecated
     * Not used anymore, Transaction Log State now moves directly from TransactionLogState::PAYABLE to TransactionLogState::PAID
     */
    const PAYMENT_IN_PROGRESS = 'PAYMENT_IN_PROGRESS';

    /**
     * The order has been paid to the shop
     */
    const PAID = 'PAID';

    /**
     * The transaction log has an informative role (only used when amountBreakdown module is enabled)
     */
    const NOT_APPLICABLE = 'NOT_APPLICABLE';
}