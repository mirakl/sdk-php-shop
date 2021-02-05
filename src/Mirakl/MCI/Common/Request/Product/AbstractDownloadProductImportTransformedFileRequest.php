<?php
namespace Mirakl\MCI\Common\Request\Product;

use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;
use Mirakl\Core\Request\AbstractImportRequest;

/**
 * (P46) Get transformed file for a products import
 */
abstract class AbstractDownloadProductImportTransformedFileRequest extends AbstractImportRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/products/imports/{import}/transformed_file';
}