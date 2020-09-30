<?php
namespace Mirakl\MMP\FrontOperator\Domain\Shop;

use Mirakl\MMP\Common\Domain\Shop\AbstractPaymentDetails;

/**
 * Transaction information about the shop: balances, subscription
 *
 * @method  bool        getPaySubscription()                            Indicate whether the shop should pay the
 *                                                                      plateform subscription fee defined by it's
 *                                                                      commission grid or not
 * @method  $this       setPaySubscription(bool $flag)
 * @method  bool        getPaymentBlocked()                             Indicate whether the operator has blocked the
 *                                                                      payment on this shop in order to stop giving
 *                                                                      money back
 * @method  $this       setPaymentBlocked(bool $flag)
 * @method  \DateTime   getSubscriptionFreeFrom()                       Date from which the shop will be offered the
 *                                                                      subscription fee
 * @method  $this       setSubscriptionFreeFrom(\DateTime $freeFrom)
 * @method  \DateTime   getSubscriptionFreeTo()                         Date from which the operator will stop offering
 *                                                                      the subscription fee to the shop
 * @method  $this       setSubscriptionFreeTo(\DateTime $freeTo)
 */
class PaymentDetails extends AbstractPaymentDetails
{}