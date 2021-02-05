<?php
namespace Mirakl\MMP\Common\Request\Shop\Document;

use Mirakl\MMP\Common\Request\Order\Document\AbstractDeleteOrderDocumentsRequest;

abstract class AbstractDeleteShopDocumentRequest extends AbstractDeleteOrderDocumentsRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/shops/documents/{document_id}';
}
