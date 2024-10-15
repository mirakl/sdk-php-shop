<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\PlatformConfiguration;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method bool   getIsNoCustomerPaymentConfirmation() // Allows seller payments to be completely separated from customer debits
 * @method $this  setIsNoCustomerPaymentConfirmation(bool $isNoCustomerPaymentConfirmation)
 * @method bool   getIsPauseDebitWorkflow() // Pause the order debit workflow when taxes must be recalculated
 * @method $this  setIsPauseDebitWorkflow(bool $isPauseDebitWorkflow)
 * @method bool   getIsPayOnDueDate() // Allow professionals to pay their orders after the receipt of the items or an explicit invoice
 * @method $this  setIsPayOnDueDate(bool $isPayOnDueDate)
 * @method bool   getIsPayOnShipment() // Allows operators to debit orders before they have been fully shipped
 * @method $this  setIsPayOnShipment(bool $isPayOnShipment)
 * @method bool   getIsSellersEditShippingOrigin() // Allows shop accounts to edit shipping origin to ensures accurate tax calculations with shipping origin data
 * @method $this  setIsSellersEditShippingOrigin(bool $isSellersEditShippingOrigin)
 * @method bool   getIsShippingAndBillingDetailsBeforeAcceptance() // Indicate if shipping and billing details are displayed before order acceptance
 * @method $this  setIsShippingAndBillingDetailsBeforeAcceptance(bool $isShippingAndBillingDetailsBeforeAcceptance)
 * @method string getOrderAcceptance() // Indicate if shop accounts must accept new orders and take responsibility for the transaction. NOT_AUTOMATIC: All shop accounts must accept their orders manually. AUTOMATIC: Orders are automatically accepted. BOTH: AUTOMATIC or NOT_AUTOMATIC mode depending on the store account
 * @method $this  setOrderAcceptance(string $orderAcceptance)
 */
class OrderWorkflowsConfiguration extends MiraklObject
{
    public const ORDER_ACCEPTANCE_NOT_AUTOMATIC = 'NOT_AUTOMATIC'; // All shop accounts must accept their orders manually.
    public const ORDER_ACCEPTANCE_AUTOMATIC = 'AUTOMATIC'; // Orders are automatically accepted.

    /**
     * @var array
     */
    protected static $mapping = [
        'no_customer_payment_confirmation'               => 'is_no_customer_payment_confirmation',
        'pause_debit_workflow'                           => 'is_pause_debit_workflow',
        'pay_on_due_date'                                => 'is_pay_on_due_date',
        'pay_on_shipment'                                => 'is_pay_on_shipment',
        'sellers_edit_shipping_origin'                   => 'is_sellers_edit_shipping_origin',
        'shipping_and_billing_details_before_acceptance' => 'is_shipping_and_billing_details_before_acceptance',
    ];
}
