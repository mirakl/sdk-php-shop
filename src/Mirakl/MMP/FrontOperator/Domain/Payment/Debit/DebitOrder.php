<?php
namespace Mirakl\MMP\FrontOperator\Domain\Payment\Debit;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Debit\DebitOrderLineCollection;

/**
 * @method  float                       getAmount()
 * @method  $this                       setAmount(float $amount)
 * @method  string                      getCurrencyIsoCode()
 * @method  $this                       setCurrencyIsoCode(string $currencyIsoCode)
 * @method  string                      getCustomerId()
 * @method  $this                       setCustomerId(string $customerId)
 * @method  string                      getOrderCommercialId()
 * @method  $this                       setOrderCommercialId(string $orderCommercialId)
 * @method  string                      getOrderId()
 * @method  $this                       setOrderId(string $orderId)
 * @method  DebitOrderLineCollection    getOrderLines()
 * @method  $this                       setOrderLines(array|DebitOrderLineCollection $orderLines)
 * @method  string                      getShopId()
 * @method  $this                       setShopId(string $shopId)
 */
class DebitOrder extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_lines' => [DebitOrderLineCollection::class, 'create'],
    ];
}