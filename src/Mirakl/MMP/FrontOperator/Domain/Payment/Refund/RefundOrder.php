<?php
namespace Mirakl\MMP\FrontOperator\Domain\Payment\Refund;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Refund\RefundedOrderLineCollection;

/**
 * @method  float                       getAmount()
 * @method  $this                       setAmount(float $amount)
 * @method  string                      getCurrencyIsoCode()
 * @method  $this                       setCurrencyIsoCode(string $currencyIsoCode)
 * @method  string                      getCustomerId()
 * @method  $this                       setCustomerId(string $custumerId)
 * @method  string                      getOrderCommercialId()
 * @method  $this                       setOrderCommercialId(string $orderCommercialId)
 * @method  string                      getOrderId()
 * @method  $this                       setOrderId(string $orderId)
 * @method  string                      getPaymentWorkflow()
 * @method  $this                       setPaymentWorkflow(string $paymentWorkflow)
 * @method  RefundedOrderLineCollection getOrderLines()
 * @method  $this                       setOrderLines(RefundedOrderLineCollection $orderLines)
 * @method  string                      getShopId()
 * @method  $this                       setShopId(string $shopId)
 */
class RefundOrder extends MiraklObject
{

    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_lines' => [RefundedOrderLineCollection::class, 'create'],
    ];
}