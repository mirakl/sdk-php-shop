<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\DocumentRequest\AccountingDocumentRequestResponse;

/**
 * @method AccountingDocumentRequestResponse current()
 * @method AccountingDocumentRequestResponse first()
 * @method AccountingDocumentRequestResponse get($offset)
 * @method AccountingDocumentRequestResponse offsetGet($offset)
 * @method AccountingDocumentRequestResponse last()
 */
class AccountingDocumentRequestResponseCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AccountingDocumentRequestResponse::class;
}