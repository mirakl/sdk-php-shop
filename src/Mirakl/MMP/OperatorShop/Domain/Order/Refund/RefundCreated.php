<?php
namespace Mirakl\MMP\OperatorShop\Domain\Order\Refund;

/**
 * @method  string  getId()
 * @method  $this   setId(string $id)
 */
class RefundCreated extends CreateRefund
{
    /**
     * @var array
     */
    protected static $mapping = [
        'refund_id' => 'id',
    ];
}