<?php
namespace Mirakl\MMP\Common\Domain\Order\State;

class OrderLineStateReason extends AbstractOrderLineStateReason
{
    /**
     * @var array
     */
    protected static $mapping = [
        'order_line_state_reason_code'  => 'code',
        'order_line_state_reason_label' => 'label',
    ];
}