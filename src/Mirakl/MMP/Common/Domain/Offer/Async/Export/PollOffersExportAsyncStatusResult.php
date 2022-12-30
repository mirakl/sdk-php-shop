<?php
namespace Mirakl\MMP\Common\Domain\Offer\Async\Export;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string                              getStatus()
 * @method  $this                               setStatus(string $status)
 * @method  \DateTime                           getLastUpdated()
 * @method  $this                               setLastUpdated(\DateTime $lastUpdated)
 * @method  PollOffersExportAsyncStatusError    getError()
 * @method  $this                               setError(PollOffersExportAsyncStatusError $error)
 * @method  string[]                            getUrls()
 * @method  $this                               setUrls(string[] $urls)
 */
class PollOffersExportAsyncStatusResult extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'error' => [PollOffersExportAsyncStatusError::class, 'create'],
    ];
}