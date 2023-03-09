<?php
namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method bool  getIsNoCustomerPaymentConfirmation() // Allows seller payments to be completely separated from customer debits
 * @method $this setIsNoCustomerPaymentConfirmation(bool $isNoCustomerPaymentConfirmation)
 * @method bool  getIsPayOnDueDate() // Allow professionals to pay their orders after the receipt of the items or an explicit invoice
 * @method $this setIsPayOnDueDate(bool $isPayOnDueDate)
 */
class OrderWorkflowsConfiguration extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'no_customer_payment_confirmation' => 'is_no_customer_payment_confirmation',
        'pay_on_due_date'                  => 'is_pay_on_due_date',
    ];
}