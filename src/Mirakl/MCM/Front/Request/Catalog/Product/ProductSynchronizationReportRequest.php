<?php
namespace Mirakl\MCM\Front\Request\Catalog\Product;

use Mirakl\MCM\Front\Domain\Product\Synchronization\ProductSynchronizationReport;

/**
 * (CM23) Get product synchronization report
 *
 * Get the report for a products synchronization.
 * The report returns the processed items with an additional synchronization_errors parameter
 * if some errors occurred during the synchronization of an item.
 *
 * Example:
 *
 * <code>
 * <?php
 *
 * require 'vendor/autoload.php';
 *
 * use Mirakl\MCM\Front\Client\FrontApiClient as MiraklApiClient;
 * use Mirakl\MCM\Front\Request\Catalog\Product\ProductSynchronizationReportRequest;
 *
 * // Environment parameters
 * $url = 'https://your.env/api';
 * $apiKey = '12543c2a-6b1a-4e0a-97c8-97ebf78630c0';
 *
 * try {
 * // Building request
 * $request = new ProductSynchronizationReportRequest('f287756c-d7da-4a11-a00e-05b9ff23dd22');
 *
 * // Instantiating the Mirakl API Client
 * $api = new MiraklApiClient($url, $apiKey);
 *
 * // Calling the API
 * $result = $api->getProductSynchronizationReport($request);
 *
 * // \Mirakl\MCM\Front\Domain\Product\Synchronization\ProductSynchronizationReport
 * var_dump($result); // decorated response
 *
 * // You can also retrieve raw response by using run() method of API client:
 * $result = $api->run($request); // or $api->raw()->getProductSynchronizationStatus($request)
 * //var_dump($result); // returns \Psr\Http\Message\ResponseInterface
 *
 * } catch (\Exception $e) {
 * // An exception is thrown if object requested is not found or if an error occurs
 * var_dump($e->getTraceAsString());
 * }
 * </code>
 */
class ProductSynchronizationReportRequest extends AbstractProductSynchronizationRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/mcm/products/synchronization/{tracking_id}/report';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ProductSynchronizationReport::decorator();
    }
}