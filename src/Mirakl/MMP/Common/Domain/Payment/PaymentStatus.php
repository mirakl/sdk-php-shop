<?php
namespace Mirakl\MMP\Common\Domain\Payment;

class PaymentStatus
{
    const OK      = 'OK'; // Validate debit payment
    const REFUSED = 'REFUSED'; // Refuse debit payment
}