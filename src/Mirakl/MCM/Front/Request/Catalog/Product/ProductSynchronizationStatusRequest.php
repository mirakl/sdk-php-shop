<?php
namespace Mirakl\MCM\Front\Request\Catalog\Product;

use Mirakl\MMP\FrontOperator\Domain\Product\Synchro\ProductSynchroResult;

/**
 * (CM22) Get product synchronization status
 *
 * Get the status of a synchronization. Use this API to check whether a product synchronization has been processed.
 *
 * Example:
 *
 * <code>
 * <?php
 *
 * require 'vendor/autoload.php';
 *
 * use Mirakl\MCM\Front\Client\FrontApiClient as MiraklApiClient;
 * use Mirakl\MCM\Front\Request\Catalog\Product\ProductSynchronizationStatusRequest;
 *
 * // Environment parameters
 * $url = 'https://your.env/api';
 * $apiKey = '56789c2a-6b1a-4e0a-97c8-97ebf78630c0';
 *
 * try {
 * // Building request
 * $request = new ProductSynchronizationStatusRequest('f287756c-d7da-4a11-a00e-05b9ff23dd22');
 *
 * // Instantiating the Mirakl API Client
 * $api = new MiraklApiClient($url, $apiKey);
 *
 * // Calling the API
 * $result = $api->getProductSynchronizationStatus($request);
 *
 * // \Mirakl\MMP\FrontOperator\Domain\Product\Synchro\ProductSynchroResult
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
class ProductSynchronizationStatusRequest extends AbstractProductSynchronizationRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/mcm/products/synchronization/{tracking_id}';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ProductSynchroResult::decorator();
    }
}