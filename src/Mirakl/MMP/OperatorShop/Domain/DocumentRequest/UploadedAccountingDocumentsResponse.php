<?php
namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\UploadedAccountingDocumentsWithErrorsCollection;

/**
 * @method UploadedAccountingDocumentsWithErrorsCollection getRequests()
 * @method $this                                           setRequests(UploadedAccountingDocumentsWithErrorsCollection|array $requests)
 */
class UploadedAccountingDocumentsResponse extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'requests' => [UploadedAccountingDocumentsWithErrorsCollection::class, 'create'],
    ];
}