<?php
namespace Mirakl\MMP\FrontOperator\Domain\Invoice;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float       getAmount()
 * @method  $this       setAmount(float $amount)
 * @method  string      getCurrencyIsoCode()
 * @method  $this       setCurrencyIsoCode(string $currencyCode)
 * @method  string      getInvoiceId()
 * @method  $this       setInvoiceId(string $invoiceId)
 * @method  string      getReference()
 * @method  $this       setReference(string $reference)
 * @method  \DateTime   getTransactionDate()
 * @method  $this       setTransactionDate(\DateTime $transactionDate)
 */
class AccountingDocumentPaymentConfirmation extends MiraklObject
{}