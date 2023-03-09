<?php
namespace Mirakl\MMP\Common\Request\Payment\Transaction;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Payment\Transaction\ExportTransactionLinesAsync;

/**
 * (TL03) Export transaction lines JSON file asynchronously
 *
 * @method string    getAccountingDocumentId()
 * @method $this     setAccountingDocumentId(string $accountingDocumentId)
 * @method string    getAccountingDocumentNumber()
 * @method $this     setAccountingDocumentNumber(string $accountingDocumentNumber)
 * @method int       getItemsPerChunk()
 * @method $this     setItemsPerChunk(int $itemsPerChunk)
 * @method \DateTime getDateCreatedFrom()
 * @method $this     setDateCreatedFrom(\DateTime $dateCreatedFrom)
 * @method \DateTime getDateCreatedTo()
 * @method $this     setDateCreatedTo(\DateTime $dateCreatedTo)
 * @method \DateTime getLastUpdatedFrom()
 * @method $this     setLastUpdatedFrom(\DateTime $lastUpdatedFrom)
 * @method int       getMegabytesPerChunk()
 * @method $this     setMegabytesPerChunk(int $megabytesPerChunk)
 * @method string[]  getOrderId()
 * @method $this     setOrderId(string[] $orderId)
 * @method string[]  getOrderLineId()
 * @method $this     setOrderLineId(string[] $orderLineId)
 * @method string[]  getOrderReferenceForCustomer()
 * @method $this     setOrderReferenceForCustomer(string[] $orderReferenceForCustomer)
 * @method string[]  getOrderReferenceForSeller()
 * @method $this     setOrderReferenceForSeller(string[] $orderReferenceForSeller)
 * @method string[]  getShopDomain()
 * @method $this     setShopDomain(string[] $shopDomain)
 * @method string[]  getShopModel()
 * @method $this     setShopModel(string[] $shopModel)
 * @method string[]  getPaymentState()
 * @method $this     setPaymentState(string[] $paymentState)
 * @method string    getPaymentVoucherNumber()
 * @method $this     setPaymentVoucherNumber(string $paymentVoucherNumber)
 * @method int       getShopId()
 * @method $this     setShopId(int $shopId)
 * @method \DateTime getTransactionDateFrom()
 * @method $this     setTransactionDateFrom(\DateTime $transactionDateFrom)
 * @method \DateTime getTransactionDateTo()
 * @method $this     setTransactionDateTo(\DateTime $transactionDateTo)
 * @method string[]  getTransactionState()
 * @method $this     setTransactionState(string[] $transactionState)
 * @method string[]  getTransactionType() // List of transaction types: \Mirakl\MMP\Common\Domain\Payment\Transaction\TransactionType
 * @method $this     setTransactionType(string[] $transactionType)
 *
 * Example:
 *
 * <code>
 * require 'vendor/autoload.php';
 *
 * use Mirakl\MMP\Common\Client\CommonApiClient as MiraklApiClient;
 * use Mirakl\MMP\Common\Request\Payment\Transaction\ExportTransactionLinesAsyncRequest;
 *
 * // Environment parameters
 * $url = 'https://your.env/api';
 * $apiKey = '49936c2a-6b1a-4e0a-97c8-97bbf77630c0';
 *
 * try {
 * // Building request
 * $request = new ExportTransactionLinesAsyncRequest();
 *
 * // Instantiating the Mirakl API Client
 * $api = new MiraklApiClient($url, $apiKey);
 *
 * // Set export parameters
 * $request->setMegabytesPerChunk(10);
 * $request->setLastUpdatedFrom(new \DateTime('2023-01-01 00:00:00'));
 *
 * // Calling the API
 * $result = $api->exportTransactionLinesAsync($request);
 *
 * var_dump($result); // see \Mirakl\MMP\Common\Domain\Payment\Transaction\ExportTransactionLinesAsync
 * $trackingId = $result->getTrackingId();
 *
 * } catch (\Exception $e) {
 * // An exception is thrown if object requested is not found or if an error occurs
 * var_dump($e->getTraceAsString());
 * }
 * </code>
 */
class ExportTransactionLinesAsyncRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/sellerpayment/transactions_logs/async';

    /**
     * @var array
     */
    public $bodyParams = [
        'accounting_document_id',
        'accounting_document_number',
        'date_created_from',
        'date_created_to',
        'items_per_chunk',
        'last_updated_from',
        'megabytes_per_chunk',
        'order_id',
        'order_line_id',
        'order_reference_for_customer',
        'order_reference_for_seller',
        'payment_state',
        'payment_voucher_number',
        'shop_domain',
        'shop_id',
        'shop_model',
        'transaction_date_from',
        'transaction_date_to',
        'transaction_type'
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ExportTransactionLinesAsync::decorator();
    }
}