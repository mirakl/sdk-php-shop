<?php
namespace Mirakl\MMP\Common\Request\Order\Document;

use Mirakl\Core\Domain\Collection\DocumentCollection;
use Mirakl\MMP\Common\Request\Document\AbstractDocumentsUploadRequest;

/**
 * (OR74) Upload documents to associate to an order
 *
 * Documents filenames must be distinct. Only documents of the following types are supported:
 * csv, doc, xls, ppt, pdf, odt, ods, odp, txt, rtf, png, jpg, gif.
 * An order can have a maximum of 50 documents.
 *
 * @method  string  getOrderId()
 * @method  $this   setOrderId(string $orderId)
 * @method  bool    hasDocuments()
 */
abstract class AbstractUploadOrdersDocumentsRequest extends AbstractDocumentsUploadRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/documents';

    /**
     * @var array
     */
    protected $uriVars = [
        '{order}' => 'order_id'
    ];

    /**
     * @param   DocumentCollection  $documents
     * @param   string              $orderId
     */
    public function __construct(DocumentCollection $documents, $orderId)
    {
        parent::__construct($documents);
        $this->setOrderId($orderId);
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        $params = parent::getBodyParams();
        $params['order_documents'] = $this->formatUploadDetails('order_documents', 'order_document');

        return $params;
    }
}