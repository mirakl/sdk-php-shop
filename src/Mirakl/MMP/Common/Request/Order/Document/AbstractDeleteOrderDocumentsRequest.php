<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Order\Document;

use Mirakl\Core\Request\AbstractRequest;

/**
 * (OR76) Delete order document
 *
 * @method int   getDocumentId()
 * @method $this setDocumentId(int $documentId)
 */
abstract class AbstractDeleteOrderDocumentsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'DELETE';

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
     * @param int $documentId
     */
    public function __construct($documentId)
    {
        parent::__construct();

        $this->setDocumentId($documentId);
    }
}
