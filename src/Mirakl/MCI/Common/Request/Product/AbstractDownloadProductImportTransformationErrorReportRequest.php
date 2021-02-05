<?php
namespace Mirakl\MCI\Common\Request\Product;

use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;
use Mirakl\Core\Request\AbstractImportRequest;

/**
 * (P47) Get transformation errors report file for a product import
 */
abstract class AbstractDownloadProductImportTransformationErrorReportRequest extends AbstractImportRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/products/imports/{import}/transformation_error_report';
}