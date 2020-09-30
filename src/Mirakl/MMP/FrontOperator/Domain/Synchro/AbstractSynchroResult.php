<?php
namespace Mirakl\MMP\FrontOperator\Domain\Synchro;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  \DateTime   getDateCreated()
 * @method  $this       setDateCreated(\DateTime $dateCreated)
 * @method  bool        getErrorReport()
 * @method  $this       setErrorReport(bool $flag)
 * @method  int         getLinesInError()
 * @method  $this       setLinesInError(int $linesInError)
 * @method  int         getLinesInSuccess()
 * @method  $this       setLinesInSuccess(int $linesInSuccess)
 * @method  int         getLinesRead()
 * @method  $this       setLinesRead(int $linesRead)
 * @method  string      getStatus()
 * @method  $this       setStatus(string $status)               One of ProcessTrackingStatus
 * @method  string      getSynchroId()
 * @method  $this       setSynchroId(string $synchroId)
 */
abstract class AbstractSynchroResult extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'has_error_report' => 'error_report',
    ];

    /**
     * @return  bool
     */
    public function hasErrorReport()
    {
        return (bool) $this->getErrorReport();
    }
}