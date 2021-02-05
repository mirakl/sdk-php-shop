<?php
namespace Mirakl\MMP\Shop\Domain\Payment\Transaction;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string                  getCommercialId()
 * @method  $this                   setCommercialId(string $commercialId)
 * @method  \DateTime               getCreationDate()
 * @method  $this                   setCreationDate(\DateTime $creationDate)
 * @method  string                  getId()
 * @method  $this                   setId(string $id)
 * @method  TransactionPaymentInfo  getPaymentInfo()
 * @method  $this                   setPaymentInfo(TransactionPaymentInfo $paymentInfo)
 */
class TransactionOrder extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'payment_info' => [TransactionPaymentInfo::class, 'create'],
    ];
}