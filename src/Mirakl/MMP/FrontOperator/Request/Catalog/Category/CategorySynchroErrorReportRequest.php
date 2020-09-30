<?php
namespace Mirakl\MMP\FrontOperator\Request\Catalog\Category;

use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;
use Mirakl\MMP\Common\Request\Synchro\AbstractSynchroErrorReportRequest;

/**
 * (CA03) Download the error report of a categories synchro
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Catalog\Category\CategorySynchroErrorReportRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new CategorySynchroErrorReportRequest('SYNCHRO_ID');
 *
 * $result = $api->getCategorySynchroErrorReport($request)->getFile();
 * // $result => @see \Mirakl\Core\Domain\FileWrapper;
 *
 * </code>
 */
class CategorySynchroErrorReportRequest extends AbstractSynchroErrorReportRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/categories/synchros/{synchro}/error_report';
}