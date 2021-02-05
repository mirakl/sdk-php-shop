<?php
namespace Mirakl\MCI\Common\Request\Product;

use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;
use Mirakl\Core\Request\AbstractImportRequest;

/**
 * (P44) Get errors report file for a products import
 */
abstract class AbstractDownloadProductImportErrorReportRequest extends AbstractImportRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/products/imports/{import}/error_report';
}