<?php
namespace Mirakl\MMP\FrontOperator\Request\Catalog\Product;

use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;
use Mirakl\MMP\Common\Request\Synchro\AbstractSynchroErrorReportRequest;

/**
 * (P23) Download the error report of a products synchro
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Catalog\Product\ProductSynchroErrorReportRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new ProductSynchroErrorReportRequest('SYNCHRO_ID');
 *
 * $result = $api->getProductSynchroErrorReport($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper;
 *
 * </code>
 */
class ProductSynchroErrorReportRequest extends AbstractSynchroErrorReportRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $endpoint = '/products/synchros/{synchro}/error_report';
}