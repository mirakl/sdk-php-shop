<?php
namespace Mirakl\MMP\FrontOperator\Domain\Payment\Refund;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Refund\RefundOrderLineCollection;

/**
 * @method  string                      getOfferId()
 * @method  $this                       setOfferId(string $offerId)
 * @method  float                       getOrderLineAmount()
 * @method  $this                       setOrderLineAmount(float $orderLineAmount)
 * @method  string                      getOrderLineId()
 * @method  $this                       setOrderLineId(string $orderLineId)
 * @method  int                         getOrderLineQuantity()
 * @method  $this                       setOrderLineQuantity(string $orderLineQuantity)
 * @method  RefundOrderLineCollection   getRefunds()
 * @method  $this                       setRefunds(RefundOrderLineCollection $refunds)
 */
class RefundedOrderLine extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'refunds' => [RefundOrderLineCollection::class, 'create'],
    ];
}