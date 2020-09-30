<?php
namespace Mirakl\MMP\Operator\Request\Payment\Invoice;

use Mirakl\MMP\OperatorShop\Request\Payment\Invoice\AbstractDownloadInvoiceRequest;

/**
 * (IV02) Download an invoice
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\Payment\Invoice\DownloadInvoiceRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new DownloadInvoiceRequest('INVOICE_ID');
 * $result = $api->downloadInvoice($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadInvoiceRequest extends AbstractDownloadInvoiceRequest
{}