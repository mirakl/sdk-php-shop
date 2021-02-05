<?php
namespace Mirakl\MMP\Common\Domain\Shop;

use Mirakl\Core\Domain\MiraklObject;

/**
 * Transaction information about the shop : balances, subscription
 *
 * @method  float   getPaidBalance()                    Total amount of the orders received by the customers and paid
 *                                                      back to the shop.
 * @method  $this   setPaidBalance(float $balance)
 * @method  float   getPayableBalance()                 Total amount of the orders (minus commissions) received by the
 *                                                      customers. This amount will be the one used by the next payment
 *                                                      process.
 * @method  $this   setPayableBalance(float $balance)
 * @method  float   getPendingBalance()                 The total amount of the orders (minus commissions) in the
 *                                                      shipping process. Once received, an order will see it's amount
 *                                                      goes in the payable balance.
 * @method  $this   setPendingBalance(float $balance)
 */
abstract class AbstractPaymentDetails extends MiraklObject
{}