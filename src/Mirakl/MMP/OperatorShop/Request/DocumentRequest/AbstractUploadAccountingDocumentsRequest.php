<?php
namespace Mirakl\MMP\OperatorShop\Request\DocumentRequest;

use Mirakl\MMP\Common\Request\Document\AbstractFilesUploadRequest;
use Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\UploadAccountingDocumentCollection;
use Mirakl\MMP\OperatorShop\Domain\DocumentRequest\UploadedAccountingDocumentsResponse;

/**
 * (DR74) Upload order-related accounting documents
 *
 * Documents filenames must be distinct.
 * If several formats are required for a document request, they must all be uploaded at once.
 *
 * A maximum of 50 documents can be uploaded simultaneously.
 *
 * @method UploadAccountingDocumentCollection getDocumentsInput()
 * @method $this                              setDocumentsInput(UploadAccountingDocumentCollection|array $documentsInput)
 */
abstract class AbstractUploadAccountingDocumentsRequest extends AbstractFilesUploadRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/document-request/documents/upload';

    /**
     * @var array
     */
    protected static $dataTypes = [
        'documents_input' => [UploadAccountingDocumentCollection::class, 'create'],
    ];

    /**
     * @param UploadAccountingDocumentCollection|array $documentsInput
     */
    public function __construct($documentsInput)
    {
        parent::__construct();
        $this->setDocumentsInput($documentsInput);
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        $params = parent::getBodyParams();

        $params['documents_input'] = ['requests' => $this->getDocumentsInput()->toArray()];

        return $params;
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return UploadedAccountingDocumentsResponse::decorator();
    }
}