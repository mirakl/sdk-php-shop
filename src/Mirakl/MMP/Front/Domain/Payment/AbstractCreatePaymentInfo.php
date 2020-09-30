<?php
namespace Mirakl\MMP\Front\Domain\Payment;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getPaymentId()
 * @method  $this   setPaymentId(string $paymentId)
 * @method  string  getPaymentType()
 * @method  $this   setPaymentType(string $paymentType)
 */
abstract class AbstractCreatePaymentInfo extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'imprint_number' => 'payment_id',
    ];
}