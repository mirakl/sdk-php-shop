<?php
namespace Mirakl\MMP\Common\Domain\Payment;

/**
 * Type of transactions in the transaction logs
 */
class TransactionType
{
    const MANUAL_CREDIT                    = 'MANUAL_CREDIT';
    const MANUAL_CREDIT_VAT                = 'MANUAL_CREDIT_VAT';
    const MANUAL_INVOICE                   = 'MANUAL_INVOICE';
    const MANUAL_INVOICE_VAT               = 'MANUAL_INVOICE_VAT';

    const ORDER_AMOUNT                     = 'ORDER_AMOUNT';
    const ORDER_AMOUNT_TAX                 = 'ORDER_AMOUNT_TAX';
    const ORDER_SHIPPING_AMOUNT            = 'ORDER_SHIPPING_AMOUNT';
    const ORDER_SHIPPING_AMOUNT_TAX        = 'ORDER_SHIPPING_AMOUNT_TAX';

    const COMMISSION_FEE                   = 'COMMISSION_FEE';
    const COMMISSION_VAT                   = 'COMMISSION_VAT';

    const REFUND_ORDER_AMOUNT              = 'REFUND_ORDER_AMOUNT';
    const REFUND_ORDER_AMOUNT_TAX          = 'REFUND_ORDER_AMOUNT_TAX';
    const REFUND_ORDER_SHIPPING_AMOUNT     = 'REFUND_ORDER_SHIPPING_AMOUNT';
    const REFUND_ORDER_SHIPPING_AMOUNT_TAX = 'REFUND_ORDER_SHIPPING_AMOUNT_TAX';
    const REFUND_COMMISSION_FEE            = 'REFUND_COMMISSION_FEE';
    const REFUND_COMMISSION_VAT            = 'REFUND_COMMISSION_VAT';
    const SUBSCRIPTION_FEE                 = 'SUBSCRIPTION_FEE';
    const SUBSCRIPTION_VAT                 = 'SUBSCRIPTION_VAT';

    const OPERATOR_REMITTED_ORDER_AMOUNT_TAX
                                           = 'OPERATOR_REMITTED_ORDER_AMOUNT_TAX';
    const OPERATOR_REMITTED_ORDER_SHIPPING_AMOUNT_TAX
                                           = 'OPERATOR_REMITTED_ORDER_SHIPPING_AMOUNT_TAX';
    const OPERATOR_REMITTED_REFUND_ORDER_AMOUNT_TAX
                                           = 'OPERATOR_REMITTED_REFUND_ORDER_AMOUNT_TAX';
    const OPERATOR_REMITTED_REFUND_ORDER_SHIPPING_AMOUNT_TAX
                                           = 'OPERATOR_REMITTED_REFUND_ORDER_SHIPPING_AMOUNT_TAX';

    const PAYMENT                          = 'PAYMENT';
}