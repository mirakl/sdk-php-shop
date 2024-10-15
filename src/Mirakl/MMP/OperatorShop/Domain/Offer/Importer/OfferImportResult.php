<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Offer\Importer;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method \DateTime getDateCreated()
 * @method $this     setDateCreated(\DateTime $dateCreated)
 * @method bool      getErrorReport()
 * @method $this     setErrorReport(bool $flag)
 * @method int       getImportId()
 * @method $this     setImportId(int $id)
 * @method int       getLinesInError()
 * @method $this     setLinesInError(int $linesInError)
 * @method int       getLinesInPending()
 * @method $this     setLinesInPending(int $linesInPending)
 * @method int       getLinesInSuccess()
 * @method $this     setLinesInSuccess(int $linesInSuccess)
 * @method int       getLinesRead()
 * @method $this     setLinesRead(int $linesRead)
 * @method string    getMode() One of ImportMode
 * @method $this     setMode(string $mode)
 * @method int       getOfferDeleted()
 * @method $this     setOfferDeleted(int $offerDeleted)
 * @method int       getOfferInserted()
 * @method $this     setOfferInserted(int $offerInserted)
 * @method int       getOfferUpdated()
 * @method $this     setOfferUpdated(int $offerUpdated)
 * @method string    getReasonStatus()
 * @method $this     setReasonStatus(string $reasonStatus)
 * @method string    getStatus()
 * @method $this     setStatus(string $status)
 */
class OfferImportResult extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'has_error_report' => 'error_report',
    ];

    /**
     * @return bool
     */
    public function hasErrorReport()
    {
        return (bool) $this->getErrorReport();
    }
}
