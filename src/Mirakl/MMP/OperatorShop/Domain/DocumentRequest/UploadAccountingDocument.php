<?php
namespace Mirakl\MMP\OperatorShop\Domain\DocumentRequest;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\OperatorShop\Domain\Collection\DocumentRequest\AccountingDocumentFileCollection;

/**
 * @method string                           getDocumentNumber()
 * @method $this                            setDocumentNumber(string $documentNumber)
 * @method \DateTime                        getDueDate()
 * @method $this                            setDueDate(\DateTime $dueDate)
 * @method AccountingDocumentFileCollection getFiles()
 * @method $this                            setFiles(AccountingDocumentFileCollection|array $files)
 * @method \DateTime                        getIssueDate()
 * @method $this                            setIssueDate(\DateTime $issueDate)
 * @method string                           getRequestId()
 * @method $this                            setRequestId(string $requestId)
 * @method float                            getTotalAmountExcludingTaxes()
 * @method $this                            setTotalAmountExcludingTaxes(float $totalAmountExcludingTaxes)
 * @method float                            getTotalTaxAmount()
 * @method $this                            setTotalTaxAmount(float $totalTaxAmount)
 */
class UploadAccountingDocument extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'files' => [AccountingDocumentFileCollection::class, 'create'],
    ];
}