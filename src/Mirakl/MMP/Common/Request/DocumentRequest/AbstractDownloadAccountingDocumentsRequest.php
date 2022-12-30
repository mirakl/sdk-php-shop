<?php
namespace Mirakl\MMP\Common\Request\DocumentRequest;

use Mirakl\Core\Exception\RequestValidationException;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Response\Decorator\FileTrait as FileResponseDecorator;

/**
 * (DR73) Download accounting documents
 *
 * At least one of the following filters must be applied: document_id or entity_id
 * If more than one document is requested, the output of the API will be a ZIP archive.
 * The tree structure of this archive is as follows:
 * documents-1624624030618.zip
 * |
 * |__ product-logistic-order/
 * |   |__order1-A/|      |__ INV203837.pdf
 * |      |__ INV203837.cxml
 * |   |__order1-B/|      |__ INV203839.pdf
 *
 * @method string[] getDocumentIds()
 * @method $this    setDocumentIds(array $documentIds)
 * @method string[] getDocumentFormats()
 * @method $this    setDocumentFormats(string[] $documentFormats)
 * @method string[] getEntityIds()
 * @method $this    setEntityIds(array $entityIds)
 * @method string[] getEntityTypes()
 * @method $this    setEntityTypes(array $entityTypes)
 */
abstract class AbstractDownloadAccountingDocumentsRequest extends AbstractRequest
{
    use FileResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/document-request/documents/download';

    /**
     * @var array
     */
    protected $duplicatedQueryParams = [
        'document_id',
        'document_format',
        'entity_id',
        'entity_type',
    ];

    /**
     * @var array
     */
    public $queryParams = [
        'document_ids'     => 'document_id',     // Document identifiers. This parameter can be supplied multiple times.
        'document_formats' => 'document_format', // Document formats. This parameter can be supplied multiple times.
                                                 // One or more among: PDF, cXML
        'entity_ids'       => 'entity_id',       // Entity identifiers related to the documents to download. This parameter can be supplied multiple times.
                                                 // The entity_type must be specified to use this filter, otherwise an error 400 will be returned.
        'entity_types'     => 'entity_type',     // Entity types related to the documents to download. This parameter can be supplied multiple times.
                                                 // One or more among: PRODUCT_LOGISTIC_ORDER, SHOP_BILLING_CYCLE_PURCHASE_ORDER
    ];

    /**
     * @throws RequestValidationException
     */
    protected function checkParams()
    {
        if (empty($this->getDocumentIds()) && empty($this->getEntityIds())) {
            throw new RequestValidationException('You must set either document_ids or entity_ids');
        }
    }

    /**
     * @inheritdoc
     */
    public function getQueryParams()
    {
        $this->checkParams();

        return parent::getQueryParams();
    }
}