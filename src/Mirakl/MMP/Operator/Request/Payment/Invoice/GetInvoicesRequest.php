<?php
namespace Mirakl\MMP\Operator\Request\Payment\Invoice;

use Mirakl\MMP\OperatorShop\Request\Payment\Invoice\AbstractGetInvoicesRequest;

/**
 * (IV01) List invoices
 * Note: this resource supports pagination and will return 10 invoices
 *
 * @method  string  getShopId()
 * @method  $this   setShopId(string $shopId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\Payment\Invoice\GetInvoicesRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new GetInvoicesRequest();
 * $request->setShopId('1234'); // Optional
 * $result = $api->getInvoices($request);
 * // $result => @see \Mirakl\MMP\OperatorShop\Domain\Collection\Invoice\InvoiceCollection
 * </code>
 */
class GetInvoicesRequest extends AbstractGetInvoicesRequest
{
    /**
     * @var array
     */
    public $queryParams = ['shop_id' => 'shop', 'type', 'currency'];
}