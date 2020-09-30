<?php
namespace Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Debit;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\FrontOperator\Domain\Payment\Debit\OrderPayment;

/**
 * @method  OrderPayment    current()
 * @method  OrderPayment    first()
 * @method  OrderPayment    get($offset)
 * @method  OrderPayment    offsetGet($offset)
 * @method  OrderPayment    last()
 */
class OrderPaymentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderPayment::class;
}