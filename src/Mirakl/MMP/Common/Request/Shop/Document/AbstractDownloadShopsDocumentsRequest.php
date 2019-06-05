<?php
namespace Mirakl\MMP\Common\Request\Shop\Document;

use Mirakl\Core\Exception\RequestValidationException;
use Mirakl\MMP\Common\Request\Document\AbstractDocumentsDownloadRequest;

/**
 * (S31) If a list of document identifiers is specified only these documents are downloaded.
 *
 * <ul>
 * <li>If a list of document identifiers is specified only these documents are downloaded.
 * <ul>
 * <li>If more than one docuemnt id is specified, the documents will be wrapped in a ZIP archive</li>
 * <li>If only one document id is specified the document will not be zipped</li>
 * </ul>
 * </li>
 * <li>
 * If no document identifiers is specified, all the shop documents will be downloaded.<br/>
 * Use a list of shop document type codes to retrieve specific types from your shop.<br/>
 * In this case, the output of the API will always be a ZIP archive even if there is only one document to retrieve.
 * </li>
 * </ul>
 * <p>When documents are retrieved, they're wrapped into a ZIP archive except
 * when only one document id is specified. The tree structure of this archive is as follow:
 * <pre>
 * documents-timestamp.zip
 * |__ shop_id/
 * |   |__ image.png
 * |   |__ image(1).png
 * |   |__ foo.txt
 * </pre>
 * </p>
 *
 * @method array getDocumentIds()
 * @method array getShopIds()
 * @method array getTypeCodes()
 * @method $this setTypeCodes(array $typeCodes)
 */
abstract class AbstractDownloadShopsDocumentsRequest extends AbstractDocumentsDownloadRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shops/documents/download';

    /**
     * @var array
     */
    public $queryParams = ['shop_ids', 'document_ids', 'type_codes'];

    /**
     * @return  $this
     * @throws  RequestValidationException
     */
    private function checkParams()
    {
        if (empty($this->getShopIds()) && empty($this->getDocumentIds())) {
            throw new RequestValidationException('You must set either shop_ids or document_ids');
        }

        return $this;
    }

    /**
     * @param   array   $documentIds
     * @return  $this
     * @throws  RequestValidationException
     */
    public function setDocumentIds(array $documentIds)
    {
        $this->setData('document_ids', $documentIds);

        return $this->checkParams();
    }

    /**
     * @param   array   $shopIds
     * @return  $this
     * @throws  RequestValidationException
     */
    public function setShopIds(array $shopIds)
    {
        $this->setData('shop_ids', $shopIds);

        return $this->checkParams();
    }
}