<?php
namespace Mirakl\MMP\Shop\Request\Payment\Invoice;

use Mirakl\MMP\OperatorShop\Request\Payment\Invoice\AbstractDownloadInvoiceRequest;

/**
 * (IV02) Download an invoice
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Payment\Invoice\DownloadInvoiceRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new DownloadInvoiceRequest('INVOICE_ID');
 * $result = $api->downloadInvoice($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class DownloadInvoiceRequest extends AbstractDownloadInvoiceRequest
{}