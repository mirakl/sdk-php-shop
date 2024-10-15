<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Accounting\Document;

class AccountingDocumentPaymentStatus
{
    public const AWAITING_PAYMENT = 'AWAITING_PAYMENT';
    public const PAID             = 'PAID';
    public const PENDING          = 'PENDING';
}
