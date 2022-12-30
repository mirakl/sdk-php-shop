<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\DocumentRequest\UploadAccountingDocument;

/**
 * @method UploadAccountingDocument current()
 * @method UploadAccountingDocument first()
 * @method UploadAccountingDocument get($offset)
 * @method UploadAccountingDocument offsetGet($offset)
 * @method UploadAccountingDocument last()
 */
class UploadAccountingDocumentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UploadAccountingDocument::class;
}