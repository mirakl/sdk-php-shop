<?php
namespace Mirakl\MMP\Operator\Domain\Collection\Invoice;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Operator\Domain\Invoice\EditManualAccountingDocument;

/**
 * @method  EditManualAccountingDocument    current()
 * @method  EditManualAccountingDocument    first()
 * @method  EditManualAccountingDocument    get($offset)
 * @method  EditManualAccountingDocument    offsetGet($offset)
 * @method  EditManualAccountingDocument    last()
 */
class EditManualAccountingDocumentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = EditManualAccountingDocument::class;
}