<?php
namespace Mirakl\MMP\Common\Domain\Order\State;

/**
 * @method  OrderStateReason    getReason()
 * @method  $this               setReason(array|OrderStateReason $reason)
 */
class OrderStatus extends AbstractOrderStatus
{
    /**
     * @var array
     */
    protected static $mapping = [
        'order_state' => 'state',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'reason' => [OrderStateReason::class, 'create'],
    ];
}