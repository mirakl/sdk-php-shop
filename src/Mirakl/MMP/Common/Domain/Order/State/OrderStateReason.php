<?php
namespace Mirakl\MMP\Common\Domain\Order\State;

class OrderStateReason extends AbstractOrderStateReason
{
    /**
     * @var array
     */
    protected static $mapping = [
        'order_state_reason_code'  => 'code',
        'order_state_reason_label' => 'label',
    ];
}