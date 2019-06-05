<?php
namespace Mirakl\MCI\Common\Request\Product;

use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;
use Mirakl\Core\Request\AbstractImportRequest;

/**
 * (P45) Get products report file for a products import
 */
abstract class AbstractDownloadProductImportNewProductsReportRequest extends AbstractImportRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/products/imports/{import}/new_product_report';
}