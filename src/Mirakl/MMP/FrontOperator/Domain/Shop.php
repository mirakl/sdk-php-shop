<?php
namespace Mirakl\MMP\FrontOperator\Domain;

use Mirakl\MMP\Common\Domain\Shop\AbstractShop;
use Mirakl\MMP\FrontOperator\Domain\Shop\PaymentDetails;

/**
 * @method  \DateTime       getImmunityDate()                           Date until the shop is immunized against suspension
 * @method  $this           setImmunityDate(\DateTime $immunityDate)
 * @method  string          getOperatorInternalId()                     Uniqued identifier provided by the Operator
 * @method  $this           setOperatorInternalId(string $id)
 * @method  string          getPremiumState()
 * @method  $this           setPremiumState(string $state)              One of PremiumState
 * @method  PaymentDetails  getPaymentDetails()
 * @method  $this           setPaymentDetails(array|PaymentDetails $paymentDetails)
 */
class Shop extends AbstractShop
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'payment_details' => [PaymentDetails::class, 'create'],
    ];
}