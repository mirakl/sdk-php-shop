<?php
namespace Mirakl\MMP\Operator\Domain\Collection\Invoice;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Operator\Domain\Invoice\ManualAccountingDocumentLine;

/**
 * @method  ManualAccountingDocumentLine    current()
 * @method  ManualAccountingDocumentLine    first()
 * @method  ManualAccountingDocumentLine    get($offset)
 * @method  ManualAccountingDocumentLine    offsetGet($offset)
 * @method  ManualAccountingDocumentLine    last()
 */
class ManualAccountingDocumentLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ManualAccountingDocumentLine::class;
}