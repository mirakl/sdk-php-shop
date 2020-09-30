<?php
namespace Mirakl\MMP\Operator\Domain\Invoice;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\InputWithErrors;
use Mirakl\MMP\OperatorShop\Domain\Invoice;

/**
 * @method  Invoice         getManualAccountingDocument()
 * @method  $this           setManualAccountingDocument(array|Invoice $manualAccountingDocument)
 * @method  InputWithErrors getManualAccountingDocumentError()
 * @method  $this           setManualAccountingDocumentError(array|InputWithErrors $manualAccountingDocumentError)
 */
class CreatedManualAccountingDocumentReturn extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'manual_accounting_document'       => [Invoice::class, 'create'],
        'manual_accounting_document_error' => [InputWithErrors::class, 'create'],
    ];
}