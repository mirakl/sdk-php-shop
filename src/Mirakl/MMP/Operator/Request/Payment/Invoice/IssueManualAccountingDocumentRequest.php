<?php
namespace Mirakl\MMP\Operator\Request\Payment\Invoice;

use Mirakl\Core\Request\AbstractRequest;

/**
 * (IV05) Issue manual accounting document
 *
 * @method  string  getManualAccountingDocumentId()
 * @method  string  setManualAccountingDocumentId(string $id)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\Payment\Invoice\IssueManualAccountingDocumentRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 *
 * $request = new IssueManualAccountingDocumentRequest('ID');
 * $api->issueManualAccountingDocument($request);
 * </code>
 */
class IssueManualAccountingDocumentRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/invoices/{manual_accounting_document_id}/issue';

    /**
     * @var array
     */
    protected $uriVars = [
        '{manual_accounting_document_id}' => 'manual_accounting_document_id'
    ];

    /**
     * @param   string  $id
     */
    public function __construct($id)
    {
        parent::__construct();
        $this->setManualAccountingDocumentId($id);
    }
}