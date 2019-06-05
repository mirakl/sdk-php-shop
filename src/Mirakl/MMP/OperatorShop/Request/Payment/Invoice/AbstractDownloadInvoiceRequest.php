<?php
namespace Mirakl\MMP\OperatorShop\Request\Payment\Invoice;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Response\Decorator\PdfTrait as PdfResponseDecorator;

/**
 * (IV02) Download an invoice
 *
 * @method  string  getInvoiceId()
 * @method  $this   setInvoiceId(string $invoiceId)
 */
abstract class AbstractDownloadInvoiceRequest extends AbstractRequest
{
    use PdfResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/invoices/{invoice}';

    /**
     * @var array
     */
    protected $uriVars = [
        '{invoice}' => 'invoice_id',
    ];

    /**
     * @param   string  $invoiceId
     */
    public function __construct($invoiceId)
    {
        parent::__construct();
        $this->setInvoiceId($invoiceId);
    }
}