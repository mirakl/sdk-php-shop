<?php
namespace Mirakl\MCI\Common\Domain;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  bool    getErrorReport()
 * @method  $this   setErrorReport(bool $flag)
 * @method  string  getImportStatus()
 * @method  $this   setImportStatus(string $importStatus)
 */
abstract class AbstractCatalogImportResult extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'has_error_report' => 'error_report',
    ];

    /**
     * @return  string
     */
    public function getStatus()
    {
        return $this->getImportStatus();
    }

    /**
     * @return  bool
     */
    public function hasErrorReport()
    {
        return (bool) $this->getErrorReport();
    }
}