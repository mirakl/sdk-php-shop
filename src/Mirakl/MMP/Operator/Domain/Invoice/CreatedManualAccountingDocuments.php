<?php
namespace Mirakl\MMP\Operator\Domain\Invoice;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Operator\Domain\Collection\Invoice\CreatedManualAccountingDocumentReturnCollection
    as DocumentReturnCollection;

/**
 * @method  DocumentReturnCollection    getManualAccountingDocumentReturns()
 * @method  $this                       setManualAccountingDocumentReturns(array|DocumentReturnCollection $documents)
 */
class CreatedManualAccountingDocuments extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'manual_accounting_document_returns' => [DocumentReturnCollection::class, 'create'],
    ];
}