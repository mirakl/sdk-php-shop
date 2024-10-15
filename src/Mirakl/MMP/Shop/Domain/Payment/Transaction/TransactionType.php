<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Payment\Transaction;

/**
 * Type of transactions in the transaction logs
 */
class TransactionType
{
    public const MANUAL_CREDIT                    = 'MANUAL_CREDIT';
    public const MANUAL_CREDIT_VAT                = 'MANUAL_CREDIT_VAT';
    public const MANUAL_INVOICE                   = 'MANUAL_INVOICE';
    public const MANUAL_INVOICE_VAT               = 'MANUAL_INVOICE_VAT';

    public const ORDER_AMOUNT                     = 'ORDER_AMOUNT';
    public const ORDER_AMOUNT_TAX                 = 'ORDER_AMOUNT_TAX';
    public const ORDER_SHIPPING_AMOUNT            = 'ORDER_SHIPPING_AMOUNT';
    public const ORDER_SHIPPING_AMOUNT_TAX        = 'ORDER_SHIPPING_AMOUNT_TAX';

    public const COMMISSION_FEE                   = 'COMMISSION_FEE';
    public const COMMISSION_VAT                   = 'COMMISSION_VAT';

    public const REFUND_ORDER_AMOUNT              = 'REFUND_ORDER_AMOUNT';
    public const REFUND_ORDER_AMOUNT_TAX          = 'REFUND_ORDER_AMOUNT_TAX';
    public const REFUND_ORDER_SHIPPING_AMOUNT     = 'REFUND_ORDER_SHIPPING_AMOUNT';
    public const REFUND_ORDER_SHIPPING_AMOUNT_TAX = 'REFUND_ORDER_SHIPPING_AMOUNT_TAX';
    public const REFUND_COMMISSION_FEE            = 'REFUND_COMMISSION_FEE';
    public const REFUND_COMMISSION_VAT            = 'REFUND_COMMISSION_VAT';

    public const SUBSCRIPTION_FEE                 = 'SUBSCRIPTION_FEE';
    public const SUBSCRIPTION_VAT                 = 'SUBSCRIPTION_VAT';

    public const PAYMENT                          = 'PAYMENT';

    public const OPERATOR_REMITTED_ORDER_AMOUNT_TAX                 = 'OPERATOR_REMITTED_ORDER_AMOUNT_TAX';
    public const OPERATOR_REMITTED_ORDER_SHIPPING_AMOUNT_TAX        = 'OPERATOR_REMITTED_ORDER_SHIPPING_AMOUNT_TAX';
    public const OPERATOR_REMITTED_REFUND_ORDER_AMOUNT_TAX          = 'OPERATOR_REMITTED_REFUND_ORDER_AMOUNT_TAX';
    public const OPERATOR_REMITTED_REFUND_ORDER_SHIPPING_AMOUNT_TAX = 'OPERATOR_REMITTED_REFUND_ORDER_SHIPPING_AMOUNT_TAX';
}
