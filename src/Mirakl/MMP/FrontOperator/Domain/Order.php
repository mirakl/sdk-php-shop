<?php
namespace Mirakl\MMP\FrontOperator\Domain;

use Mirakl\MMP\Common\Domain\Order\AbstractOrder;
use Mirakl\MMP\FrontOperator\Domain\Collection\Order\OrderLineCollection;
use Mirakl\MMP\FrontOperator\Domain\Order\OrderCustomer;

/**
 * @method  bool                getCanCancel()
 * @method  $this               setCanCancel(bool $canCancel)
 * @method  bool                getCanEvaluate()
 * @method  $this               setCanEvaluate(bool $canEvaluate)
 * @method  string              getCurrencyIsoCode()
 * @method  $this               setCurrencyIsoCode(string $currencyIsoCode)
 * @method  OrderCustomer       getCustomer()
 * @method  $this               setCustomer(array|OrderCustomer $customer)
 * @method  int                 getEvaluationGrade()
 * @method  $this               setEvaluationGrade(int $evaluationGrade)
 * @method  string              getImprintNumber()
 * @method  $this               setImprintNumber(string $imprintNumber)
 * @method  OrderLineCollection getOrderLines()
 * @method  $this               setOrderLines(array|OrderLineCollection $orderLines)
 * @method  string              getShopId()
 * @method  $this               setShopId(string $shopId)
 * @method  string              getShopName()
 * @method  $this               setShopName(string $shopName)
 */
class Order extends AbstractOrder
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'customer'    => [OrderCustomer::class, 'create'],
        'order_lines' => [OrderLineCollection::class, 'create'],
    ];
}