<?php
namespace Mirakl\MMP\Operator\Request\Payment\Invoice;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Operator\Domain\Collection\Invoice\EditManualAccountingDocumentCollection
    as DocumentCollection;
use Mirakl\MMP\Operator\Domain\Invoice\CreatedManualAccountingDocuments;

/**
 * (IV04) Update a manual accounting document
 *
 * @method  DocumentCollection  getManualAccountingDocuments()
 * @method  $this               setManualAccountingDocuments(array|DocumentCollection $documents)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Domain\Invoice\CreatedManualAccountingDocumentReturn;
 * use Mirakl\MMP\Operator\Domain\Invoice\CreatedManualAccountingDocuments;
 * use Mirakl\MMP\Operator\Request\Payment\Invoice\UpdateManualAccountingDocumentRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 *
 *
 * $input = 'manual_accounting_documents'  => [
 *   'id' => '5455011d-cf4a-4ddf-b76b-16d888fc11cf',
 *   'shop_id' => 122,
 *   'type' => 'INVOICE',
 *   'emission_date' => '2014-12-12T12:12:00.000+0000',
 *   'issued' => false,
 *   'lines' => [
 *        'description' => 'Subscription',
 *        'quantity' => 2,
 *        'amount' => 34.54,
 *        'tax_codes' => [
 *             'TVA'
 *       ]
 *   ];
 *
 * $request = new UpdateManualAccountingDocumentRequest($input['manual_accounting_documents']);
 *
 * $result = $api->updateManualAccountingDocument($request);
 *  * // $result => @see \Mirakl\MMP\Operator\Domain\Invoice\CreatedManualAccountingDocuments
 * </code>
 */
class UpdateManualAccountingDocumentRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/invoices';

    /**
     * @var array
     */
    public $bodyParams = ['manual_accounting_documents'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'manual_accounting_documents' => [DocumentCollection::class, 'create'],
    ];

    /**
     * @param   array|DocumentCollection    $documents
     */
    public function __construct($documents)
    {
        parent::__construct();
        $this->setManualAccountingDocuments($documents);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return CreatedManualAccountingDocuments::decorator();
    }
}