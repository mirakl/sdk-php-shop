<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\DocumentRequest\UploadedAccountingDocumentsWithErrors;

/**
 * @method UploadedAccountingDocumentsWithErrors current()
 * @method UploadedAccountingDocumentsWithErrors first()
 * @method UploadedAccountingDocumentsWithErrors get($offset)
 * @method UploadedAccountingDocumentsWithErrors offsetGet($offset)
 * @method UploadedAccountingDocumentsWithErrors last()
 */
class UploadedAccountingDocumentsWithErrorsCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UploadedAccountingDocumentsWithErrors::class;
}