<?php
namespace Mirakl\MCI\Common\Domain\Product;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  \DateTime   getDateCreated()
 * @method  $this       setDateCreated(\DateTime $dateCreated)
 * @method  bool        getErrorReport()
 * @method  $this       setErrorReport(bool $flag)
 * @method  string      getImportId()
 * @method  $this       setImportId(string $importId)
 * @method  string      getImportStatus()
 * @method  $this       setImportStatus(string $importStatus)
 * @method  bool        getNewProductReport()
 * @method  $this       setNewProductReport(bool $flag)
 * @method  string      getReasonStatus()
 * @method  $this       setReasonStatus(string $reasonStatus)
 * @method  string      getShopId()
 * @method  $this       setShopId(string $shopId)
 * @method  string      getSynchroId()
 * @method  $this       setSynchroId(string $synchroId)
 * @method  bool        getTransformationErrorReport()
 * @method  $this       setTransformationErrorReport(bool $flag)
 * @method  bool        getTransformedFile()
 * @method  $this       setTransformedFile(bool $flag)
 * @method  int         getTransformedLinesInError()
 * @method  $this       setTransformedLinesInError(int $linesInError)
 * @method  int         getTransformedLinesInSuccess()
 * @method  $this       setTransformedLinesInSuccess(int $linesInSuccess)
 * @method  int         getTransformedLinesRead()
 * @method  $this       setTransformedLinesRead(int $linesRead)
 * @method  int         getTransformedLinesWithWarning()
 * @method  $this       setTransformedLinesWithWarning(int $linesWithWarning)
 */
class ProductImportResult extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'has_error_report'                => 'error_report',
        'has_new_product_report'          => 'new_product_report',
        'has_transformation_error_report' => 'transformation_error_report',
        'has_transformed_file'            => 'transformed_file',
        'transform_lines_in_error'        => 'transformed_lines_in_error',
        'transform_lines_with_warning'    => 'transformed_lines_with_warning',
        'transform_lines_in_succes'       => 'transformed_lines_in_success',
        'transform_lines_read'            => 'transformed_lines_read',
    ];

    /**
     * @return  bool
     */
    public function hasErrorReport()
    {
        return (bool) $this->getErrorReport();
    }

    /**
     * @return  bool
     */
    public function hasNewProductReport()
    {
        return (bool) $this->getNewProductReport();
    }

    /**
     * @return  bool
     */
    public function hasTransformedFile()
    {
        return (bool) $this->getTransformedFile();
    }

    /**
     * @return  bool
     */
    public function hasTransformationErrorReport()
    {
        return (bool) $this->getTransformationErrorReport();
    }
}