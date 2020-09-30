<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Invoice;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Invoice\AccountingDocumentPaymentConfirmation;

/**
 * @method  AccountingDocumentPaymentConfirmation   current()
 * @method  AccountingDocumentPaymentConfirmation   first()
 * @method  AccountingDocumentPaymentConfirmation   get($offset)
 * @method  AccountingDocumentPaymentConfirmation   offsetGet($offset)
 * @method  AccountingDocumentPaymentConfirmation   last()
 */
class AccountingDocumentPaymentConfirmationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AccountingDocumentPaymentConfirmation::class;
}