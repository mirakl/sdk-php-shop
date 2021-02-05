<?php
namespace Mirakl\MMP\Common\Domain\Order\State;

/**
 * @method  OrderLineStateReason    getReason()
 * @method  $this                   setReason(array|OrderLineStateReason $reason)
 */
class OrderLineStatus extends AbstractOrderStatus
{
    /**
     * @var array
     */
    protected static $mapping = [
        'order_line_state' => 'state',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'reason' => [OrderLineStateReason::class, 'create'],
    ];
}