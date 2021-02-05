<?php
namespace Mirakl\MMP\Common\Domain\Order\Refund;

class RefundState
{
    const WAITING_REFUND         = 'WAITING_REFUND';
    const WAITING_REFUND_PAYMENT = 'WAITING_REFUND_PAYMENT';
    const REFUNDED               = 'REFUNDED';
}