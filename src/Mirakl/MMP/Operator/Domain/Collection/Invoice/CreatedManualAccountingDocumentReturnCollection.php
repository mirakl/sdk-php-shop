<?php
namespace Mirakl\MMP\Operator\Domain\Collection\Invoice;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Operator\Domain\Invoice\CreatedManualAccountingDocumentReturn;

/**
 * @method  CreatedManualAccountingDocumentReturn   current()
 * @method  CreatedManualAccountingDocumentReturn   first()
 * @method  CreatedManualAccountingDocumentReturn   get($offset)
 * @method  CreatedManualAccountingDocumentReturn   offsetGet($offset)
 * @method  CreatedManualAccountingDocumentReturn   last()
 */
class CreatedManualAccountingDocumentReturnCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CreatedManualAccountingDocumentReturn::class;
}