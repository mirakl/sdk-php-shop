<?php
namespace Mirakl\MMP\Common\Domain\Accounting\Document;

class AccountingDocumentType
{
    const AUTO_INVOICE   = 'AUTO_INVOICE';
    const MANUAL_INVOICE = 'MANUAL_INVOICE';
    const MANUAL_CREDIT  = 'MANUAL_CREDIT';
    const ALL            = 'ALL';
}