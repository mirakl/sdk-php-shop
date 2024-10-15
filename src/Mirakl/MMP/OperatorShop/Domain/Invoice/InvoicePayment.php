<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Invoice;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method string    getFailureReason()
 * @method $this     setFailureReason(string $failureReason)
 * @method string    getReference()
 * @method $this     setReference(string $reference)
 * @method string    getStatus()
 * @method $this     setStatus(string $status)
 * @method \DateTime getTransactionDate()
 * @method $this     setTransactionDate(\DateTime $transactionDate)
 */
class InvoicePayment extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'state' => 'status'
    ];
}
