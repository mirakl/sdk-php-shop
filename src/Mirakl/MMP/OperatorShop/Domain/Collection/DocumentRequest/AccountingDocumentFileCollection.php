<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\DocumentRequest\AccountingDocumentFile;

/**
 * @method AccountingDocumentFile current()
 * @method AccountingDocumentFile first()
 * @method AccountingDocumentFile get($offset)
 * @method AccountingDocumentFile offsetGet($offset)
 * @method AccountingDocumentFile last()
 */
class AccountingDocumentFileCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AccountingDocumentFile::class;
}