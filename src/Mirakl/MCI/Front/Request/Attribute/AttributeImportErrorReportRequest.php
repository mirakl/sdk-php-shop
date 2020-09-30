<?php
namespace Mirakl\MCI\Front\Request\Attribute;

use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;
use Mirakl\Core\Request\AbstractImportRequest;

/**
 * (PM03) Get error report file for an attributes import
 *
 * Example:
 *
 * <code>
 * use Mirakl\MCI\Front\Client\FrontApiClient;
 * use Mirakl\MCI\Front\Request\Attribute\AttributeImportErrorReportRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new AttributeImportErrorReportRequest('IMPORT_ID');
 * $result = $api->getAttributeImportErrorReport($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * // Download file:
 * $result->download();
 * </code>
 */
class AttributeImportErrorReportRequest extends AbstractImportRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/products/attributes/imports/{import}/error_report';
}