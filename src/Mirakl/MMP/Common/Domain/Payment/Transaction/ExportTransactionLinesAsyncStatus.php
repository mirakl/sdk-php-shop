<?php
namespace Mirakl\MMP\Common\Domain\Payment\Transaction;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method \DateTime                                  getLastUpdated()
 * @method $this                                      setLastUpdated(\DateTime $lastUpdated)
 * @method string                                     getStatus()
 * @method $this                                      setStatus(string $status)
 * @method PollExportTransactionLinesAsyncStatusError getError()
 * @method $this                                      setError(PollExportTransactionLinesAsyncStatusError $error)
 * @method string[]                                   getUrls()
 * @method $this                                      setUrls(string[] $urls)
 */
class ExportTransactionLinesAsyncStatus extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'error' => [PollExportTransactionLinesAsyncStatusError::class, 'create'],
    ];
}