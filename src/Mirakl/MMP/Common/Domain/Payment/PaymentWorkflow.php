<?php
namespace Mirakl\MMP\Common\Domain\Payment;

class PaymentWorkflow
{
    const PAY_ON_ACCEPTANCE = 'PAY_ON_ACCEPTANCE';  /* Represents a payment workflow where the payment
                                                       is done just after the order has been (fully or
                                                       partially) accepted by the shop.*/
    const PAY_ON_DELIVERY   = 'PAY_ON_DELIVERY';    /* Represents a payment workflow where the payment
                                                       is done at the latest when the order is waiting
                                                       for collection.*/
    const PAY_ON_DUE_DATE   = 'PAY_ON_DUE_DATE';    /* Represents a payment workflow where the payment
                                                       is done after a given delay (due date).*/
}