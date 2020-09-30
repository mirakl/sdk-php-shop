<?php
namespace Mirakl\MMP\FrontOperator\Domain\Payment\Debit;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getOfferId()
 * @method  $this   setOfferId(string $offerId)
 * @method  float   getOrderLineAmount()
 * @method  $this   setOrderLineAmount(float $orderLineAmount)
 * @method  string  getOrderLineId()
 * @method  $this   setOrderLineId(string $orderLineId)
 * @method  int     getOrderLineQuantity()
 * @method  $this   setOrderLineQuantity(int $orderLineQuantity)
 */
class DebitOrderLine extends MiraklObject
{}