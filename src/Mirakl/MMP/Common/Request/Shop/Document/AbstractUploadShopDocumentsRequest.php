<?php
namespace Mirakl\MMP\Common\Request\Shop\Document;

use Mirakl\Core\Domain\Collection\DocumentCollection;
use Mirakl\MMP\Common\Request\Document\AbstractDocumentsUploadRequest;

/**
 * (S32) Upload documents to associate to a shop
 *
 * Documents filenames must be distincts and there can be only one file per document type.<br/>
 * The following extensions are supported: csv, doc, xls, ppt, pdf, odt, ods, odp, txt, rtf, png, jpg, gif, zip.
 * NB. A shop can have a maximum of 50 documents.
 *
 * @method  string  getShopId()
 * @method  $this   setShopId(string $shopId)
 */
abstract class AbstractUploadShopDocumentsRequest extends AbstractDocumentsUploadRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shops/documents';

    /**
     * @var array
     */
    public $bodyParams = ['shop_id'];

    /**
     * @param   DocumentCollection  $documents
     * @param   string              $shopId
     */
    public function __construct(DocumentCollection $documents, $shopId)
    {
        parent::__construct($documents);
        $this->setShopId($shopId);
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        $params = parent::getBodyParams();
        $params['shop_documents'] = $this->formatUploadDetails('shop_documents', 'shop_document');

        return $params;
    }
}