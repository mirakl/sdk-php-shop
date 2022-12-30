<?php
namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\AccountingDocumentFileCollection;

/**
 * @method string                           getRequestId()
 * @method $this                            setRequestId(string $requestId)
 * @method string                           getDocumentNumber()
 * @method $this                            setDocumentNumber(string $documentNumber)
 * @method AccountingDocumentFileCollection getFiles()
 * @method $this                            setFiles(AccountingDocumentFileCollection|array $files)
 */
class UploadAccountingDocument extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'files' => [AccountingDocumentFileCollection::class, 'create'],
    ];
}