<?php
namespace Mirakl\MCM\Front\Request\Catalog\Product;

use Mirakl\MCM\Front\Domain\Collection\Product\ProductExportCollection;

/**
 * (CM51) Export products
 *
 * Example:
 *
 * <code>
 * <?php
 *
 * require 'vendor/autoload.php';
 *
 * use Mirakl\MCM\Front\Client\FrontApiClient as MiraklApiClient;
 * use Mirakl\MCM\Front\Request\Catalog\Product\ProductExportRequest;
 *
 * // Environment parameters
 * $url = 'https://your.env/api';
 * $apiKey = '49936c2a-6b1a-4e0a-97c8-97bbf77630c0';
 *
 * try {
 * // Building request
 * $request = new ProductExportRequest();
 *
 * // Instantiating the Mirakl API Client
 * $api = new MiraklApiClient($url, $apiKey);
 *
 * // Set updated since parameter date
 * $request->setUpdatedSince(new \DateTime('2017-11-08T14:07:00+0000'));
 *
 * // Calling the API
 * $result = $api->exportProducts($request);
 *
 * // \Mirakl\MCM\Front\Domain\Collection\Product\ProductExportCollection
 * var_dump($result); // decorated response
 *
 * // You can also retrieve raw response by using run() method of API client:
 * $result = $api->run($request); // or $api->raw()->exportProducts($request)
 * //var_dump($result); // returns \Psr\Http\Message\ResponseInterface
 *
 * } catch (\Exception $e) {
 * // An exception is thrown if object requested is not found or if an error occurs
 * var_dump($e->getTraceAsString());
 * }
 * </code>
 */
class ProductExportRequest extends AbstractProductExportRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ProductExportCollection::decorator();
    }
}