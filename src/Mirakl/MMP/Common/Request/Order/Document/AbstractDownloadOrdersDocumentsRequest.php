<?php
namespace Mirakl\MMP\Common\Request\Order\Document;

use Mirakl\Core\Exception\RequestValidationException;
use Mirakl\MMP\Common\Request\Document\AbstractDocumentsDownloadRequest;

/**
 * (OR73) Download one or multiple documents associated to one or multiple orders
 * <p/>
 * <ul>
 * <li>If a list of document identifiers is specified only these documents are downloaded.
 * <ul>
 * <li>If more than one docuemnt id is specified, the documents will be wrapped in a ZIP archive</li>
 * <li>If only one document id is specified the document will not be zipped</li>
 * </ul>
 * </li>
 * <li>If a list of order identifiers is specified, all documents from those orders are downloaded.<br/>
 * Use a list of order document type codes to retrieve specific types from those orders.<br/>
 * In this case, the output of the API will always be a ZIP archive even if there is only one document to retrieve.
 * </li>
 * </ul>
 * <p/>
 * <p>When documents are retrieved, they're wrapped into a ZIP archive except
 * when only one document id is specified. The tree structure of this archive is as follow:
 * <pre>
 * documents-timestamp.zip
 * |
 * |__ order_id_x/
 * |   |__ foo.txt
 * |   |__ bar.txt
 * |   |__ baz.pdf
 * |
 * |__ order_id_y/
 * |   |__ image.png
 * |   |__ image(1).png
 * </pre>
 * </p>
 *
 * @method  array   getDocumentCodes()
 * @method  $this   setDocumentCodes(array $codes)
 * @method  array   getOrderIds()
 */
abstract class AbstractDownloadOrdersDocumentsRequest extends AbstractDocumentsDownloadRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/orders/documents/download';

    /**
     * @var array
     */
    public $queryParams = ['order_ids', 'document_ids', 'document_codes'];

    /**
     * @return  $this
     * @throws  RequestValidationException
     */
    private function checkParams()
    {
        if (empty($this->getOrderIds()) && empty($this->getDocumentIds())) {
            throw new RequestValidationException('You must set either order_ids or document_ids');
        }

        return $this;
    }

    /**
     * @param   array   $documentIds
     * @return  $this
     */
    public function setDocumentIds(array $documentIds)
    {
        $this->setData('document_ids', $documentIds);

        return $this->checkParams();
    }

    /**
     * @param   array   $orderIds
     * @return  $this
     */
    public function setOrderIds(array $orderIds)
    {
        $this->setData('order_ids', $orderIds);

        return $this->checkParams();
    }
}