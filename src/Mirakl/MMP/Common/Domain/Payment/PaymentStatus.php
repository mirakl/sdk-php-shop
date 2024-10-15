<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Payment;

class PaymentStatus
{
    public const OK      = 'OK'; // Validate debit payment
    public const REFUSED = 'REFUSED'; // Refuse debit payment
}
