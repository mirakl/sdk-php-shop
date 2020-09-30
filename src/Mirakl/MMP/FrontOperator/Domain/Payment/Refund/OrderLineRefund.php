<?php
namespace Mirakl\MMP\FrontOperator\Domain\Payment\Refund;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float       getAmount()
 * @method  $this       setAmount(float $amount)
 * @method  string      getCurrencyIsoCode()
 * @method  $this       setCurrencyIsoCode(string $currencyIsoCode)
 * @method  string      getRefundId()
 * @method  $this       setRefundId(string $refundId)
 * @method  string      getPaymentStatus()
 * @method  $this       setPaymentStatus(string $paymentStatus)
 * @method  \DateTime   getTransactionDate()
 * @method  $this       setTransactionDate(\DateTime $transactionDate)
 * @method  string      getTransactionNumber()
 * @method  $this       setTransactionNumber(string $transactionNumber)
 */
class OrderLineRefund extends MiraklObject
{}