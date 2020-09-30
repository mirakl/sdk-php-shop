<?php
namespace Mirakl\MMP\FrontOperator\Domain\Payment\Debit;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  float       getAmount()
 * @method  $this       setAmount(float $amount)
 * @method  string      getCurrencyIsoCode()
 * @method  $this       setCurrencyIsoCode(string $currencyIsoCode)
 * @method  string      getCustomerId()
 * @method  $this       setCustomerId(string $customerId)
 * @method  string      getOrderId()
 * @method  $this       setOrderId(string $orderId)
 * @method  string      getPaymentStatus()
 * @method  $this       setPaymentStatus(string $paymentStatus)
 * @method  \DateTime   getTransactionDate()
 * @method  $this       setTransactionDate(\DateTime $transactionDate)
 * @method  string      getTransactionNumber()
 * @method  $this       setTransactionNumber(string $transactionNumber)
 */
class OrderPayment extends MiraklObject
{}