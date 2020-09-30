<?php
namespace Mirakl\MCI\Front\Request\ValueList;

use Mirakl\Core\Request\AbstractImportRequest;
use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;

/**
 * (VL03) Get error report file for a value lists import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\ValueList\ValueListImportErrorReportRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new ValueListImportErrorReportRequest('IMPORT_ID');
 * $result = $api->getValueListImportErrorReport($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class ValueListImportErrorReportRequest extends AbstractImportRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/values_lists/imports/{import}/error_report';
}