<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Order\Refund;

class RefundState
{
    public const WAITING_REFUND         = 'WAITING_REFUND';
    public const WAITING_REFUND_PAYMENT = 'WAITING_REFUND_PAYMENT';
    public const REFUNDED               = 'REFUNDED';
}
