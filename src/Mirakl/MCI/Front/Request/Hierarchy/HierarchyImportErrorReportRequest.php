<?php
namespace Mirakl\MCI\Front\Request\Hierarchy;

use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;
use Mirakl\Core\Request\AbstractImportRequest;

/**
 * (H03) Get error report file for a hierarchies import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\Hierarchy\HierarchyImportErrorReportRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new HierarchyImportErrorReportRequest('IMPORT_ID');
 * $result = $api->getHierarchyImportErrorReport($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class HierarchyImportErrorReportRequest extends AbstractImportRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/hierarchies/imports/{import}/error_report';
}