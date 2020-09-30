<?php
namespace Mirakl\MMP\FrontOperator\Request\Payment\Invoice;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\FrontOperator\Domain\Collection\Invoice\AccountingDocumentPaymentConfirmationCollection
    as DocumentCollection;

/**
 * (IV07) Confirm the payment of accounting documents
 *
 * @method  DocumentCollection  getAccountingDocuments()
 * @method  $this               setAccountingDocuments(array|DocumentCollection $accountingDocuments)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\FrontOperator\Client\FrontOperatorApiClient;
 * use Mirakl\MMP\FrontOperator\Domain\Collection\Invoice\AccountingDocumentPaymentConfirmationCollection;
 * use Mirakl\MMP\FrontOperator\Domain\Invoice\AccountingDocumentPaymentConfirmation;
 * use Mirakl\MMP\FrontOperator\Request\Payment\Invoice\ConfirmAccountingDocumentPaymentRequest;
 *
 * $api = new FrontOperatorApiClient('API_URL', 'API_KEY');
 *
 * $document = new AccountingDocumentPaymentConfirmation();
 * $document->setInvoiceId('2003');
 * $document->setAmount(10.00);
 * $document->setCurrencyIsoCode('EUR');
 * $document->setReference('REF_007');
 * $document->setTransactionDate(new \DateTime('2018-10-12 12:12:00'));
 *
 * $documents = new AccountingDocumentPaymentConfirmationCollection();
 * $documents->add($document);
 *
 * $request = new ConfirmAccountingDocumentPaymentRequest($documents);
 *
 * $api->confirmAccountingDocumentPayment($request);
 * => no response output, should give 204 response status (success)
 * </code>
 */
class ConfirmAccountingDocumentPaymentRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/invoices/confirm';

    /**
     * @var array
     */
    public $bodyParams = ['accounting_documents'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'accounting_documents' => [DocumentCollection::class, 'create'],
    ];

    /**
     * @param   array|DocumentCollection    $accountingDocuments
     */
    public function __construct($accountingDocuments)
    {
        parent::__construct();
        $this->setAccountingDocuments($accountingDocuments);
    }
}