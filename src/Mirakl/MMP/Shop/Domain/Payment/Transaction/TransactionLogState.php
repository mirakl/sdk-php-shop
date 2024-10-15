<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Payment\Transaction;

/**
 * Different payment states available for shop balance
 */
class TransactionLogState
{
    /**
     * The order has been paid by the customer but no received
     * Ther order has been paid and received by the customer but has an ongoing incident
     */
    public const PENDING = 'PENDING';

    /**
     * The order has been received by the customer and has no active incident.
     */
    public const PAYABLE = 'PAYABLE';

    /**
     * The order has been paid to the shop
     */
    public const PAID = 'PAID';

    /**
     * The transaction log has an informative role (only used when amountBreakdown module is enabled)
     */
    public const NOT_APPLICABLE = 'NOT_APPLICABLE';
}
