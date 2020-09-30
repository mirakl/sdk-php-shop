<?php
namespace Mirakl\MMP\Operator\Request\Payment\Invoice;

use Mirakl\Core\Request\AbstractRequest;

/**
 * (IV06) Delete draft accounting document
 *
 * @method  string  getAccountingDocumentId()
 * @method  string  setAccountingDocumentId(string $id)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\Payment\Invoice\DeleteDraftAccountingDocumentRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 *
 * $draftDocumentUuid = 'c8e75c4f-598f-42b5-91e6-b76001218781';
 * $request = new DeleteDraftAccountingDocumentRequest($draftDocumentUuid);
 * $api->deleteDraftAccountingDocument($request);
 * </code>
 */
class DeleteDraftAccountingDocumentRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'DELETE';

    /**
     * @var string
     */
    protected $endpoint = '/invoices/{invoice}';

    /**
     * @var array
     */
    protected $uriVars = [
        '{invoice}' => 'accounting_document_id'
    ];

    /**
     * @param   string  $id
     */
    public function __construct($id)
    {
        parent::__construct();
        $this->setAccountingDocumentId($id);
    }
}