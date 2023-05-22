<?php
namespace Mirakl\MMP\Shop\Domain\Payment\Transaction;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method TransactionDebit                    getDebit()
 * @method $this                               setDebit(TransactionDebit $debit)
 * @method string                              getDomain()
 * @method $this                               setDomain(string $domain)
 * @method TransactionManualAccountingDocument getManualAccountingDocument()
 * @method $this                               setManualAccountingDocument(TransactionManualAccountingDocument $manualAccountingDocument)
 * @method TransactionInfo                     getTransactionInfo()
 * @method $this                               setTransactionInfo(TransactionInfo $transactionInfo)
 * @method TransactionOrder                    getOrder()
 * @method $this                               setOrder(TransactionOrder $order)
 * @method TransactionOrderLine                getOrderLine()
 * @method $this                               setOrderLine(TransactionOrderLine $orderLine)
 * @method TransactionOrderTax                 getOrderTax()
 * @method $this                               setOrderTax(TransactionOrderTax $orderTax)
 * @method TransactionRefund                   getRefund()
 * @method $this                               setRefund(TransactionRefund $refund)
 * @method TransactionShopTax                  getShopTax()
 * @method $this                               setShopTax(TransactionShopTax $shopTax)
 */
class TransactionEntity extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'debit'                      => [TransactionDebit::class, 'create'],
        'manual_accounting_document' => [TransactionManualAccountingDocument::class, 'create'],
        'transaction_info'           => [TransactionInfo::class, 'create'],
        'order'                      => [TransactionOrder::class, 'create'],
        'order_line'                 => [TransactionOrderLine::class, 'create'],
        'order_tax'                  => [TransactionOrderTax::class, 'create'],
        'refund'                     => [TransactionRefund::class, 'create'],
        'shop_tax'                   => [TransactionShopTax::class, 'create'],
    ];
}