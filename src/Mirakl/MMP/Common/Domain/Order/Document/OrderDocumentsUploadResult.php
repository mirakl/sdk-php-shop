<?php
namespace Mirakl\MMP\Common\Domain\Order\Document;

use Mirakl\MMP\Common\Domain\Document\DocumentsUploadResult;

class OrderDocumentsUploadResult extends DocumentsUploadResult
{
    /**
     * @var array
     */
    protected static $mapping = [
        'order_documents' => 'documents',
    ];
}