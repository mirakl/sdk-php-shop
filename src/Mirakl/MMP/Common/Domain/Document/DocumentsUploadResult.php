<?php
namespace Mirakl\MMP\Common\Domain\Document;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Document\DocumentWithErrorsCollection;

/**
 * @method  DocumentWithErrorsCollection    getDocuments()
 * @method  int                             getErrorsCount()
 * @method  $this                           setErrorsCount(int $errorsCount)
 */
class DocumentsUploadResult extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'order_documents' => 'documents',
        'shop_documents' => 'documents',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'documents' => [DocumentWithErrorsCollection::class, 'create'],
    ];
}