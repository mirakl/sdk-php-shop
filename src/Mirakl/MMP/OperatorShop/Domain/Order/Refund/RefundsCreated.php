<?php
namespace Mirakl\MMP\OperatorShop\Domain\Order\Refund;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\OperatorShop\Domain\Collection\Order\Refund\RefundCreatedCollection;

/**
 * @method  RefundCreatedCollection getRefunds()
 * @method  $this                   setRefunds(array|RefundCreatedCollection $refunds)
 * @method  string                  getOrderTaxMode()
 * @method  $this                   setOrderTaxMode(string $orderTaxMode)
 */
class RefundsCreated extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'refunds' => [RefundCreatedCollection::class, 'create'],
    ];
}