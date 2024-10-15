<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Accounting\Document;

class AccountingDocumentType
{
    public const AUTO_INVOICE   = 'AUTO_INVOICE';
    public const MANUAL_INVOICE = 'MANUAL_INVOICE';
    public const MANUAL_CREDIT  = 'MANUAL_CREDIT';
    public const ALL            = 'ALL';
}
