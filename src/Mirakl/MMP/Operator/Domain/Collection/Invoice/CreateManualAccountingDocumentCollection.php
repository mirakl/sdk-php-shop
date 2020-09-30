<?php
namespace Mirakl\MMP\Operator\Domain\Collection\Invoice;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Operator\Domain\Invoice\CreateManualAccountingDocument;

/**
 * @method  CreateManualAccountingDocument  current()
 * @method  CreateManualAccountingDocument  first()
 * @method  CreateManualAccountingDocument  get($offset)
 * @method  CreateManualAccountingDocument  offsetGet($offset)
 * @method  CreateManualAccountingDocument  last()
 */
class CreateManualAccountingDocumentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CreateManualAccountingDocument::class;
}