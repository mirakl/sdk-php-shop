<?php
namespace Mirakl\MMP\Shop\Request\Payment\Invoice;

use Mirakl\MMP\OperatorShop\Request\Payment\Invoice\AbstractGetInvoicesRequest;

/**
 * (IV01) List invoices
 * Note: this resource supports pagination and will return 10 invoices
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Payment\Invoice\GetInvoicesRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new GetInvoicesRequest();
 * $result = $api->getInvoices($request);
 * // $result => @see \Mirakl\MMP\OperatorShop\Domain\Collection\Invoice\InvoiceCollection
 * </code>
 */
class GetInvoicesRequest extends AbstractGetInvoicesRequest
{}