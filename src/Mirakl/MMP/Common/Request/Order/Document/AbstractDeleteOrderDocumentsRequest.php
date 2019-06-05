<?php
namespace Mirakl\MMP\Common\Request\Order\Document;

use Mirakl\Core\Request\AbstractRequest;

/**
 * (OR76) Delete order document
 *
 * @method  string  getDocumentId()
 * @method  string  setDocumentId(string $documentId)
 */
abstract class AbstractDeleteOrderDocumentsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'DELETE';

    /**
     * @var string
     */
    protected $documentId;

    /**
     * @var array
     */
    protected $uriVars = [
        '{document_id}' => 'document_id'
    ];

    /**
     * @var string
     */
    protected $endpoint = '/orders/documents/{document_id}';

    /**
     * @param   string  $documentId
     */
    public function __construct($documentId)
    {
        parent::__construct();
        $this->setDocumentId($documentId);
    }
}