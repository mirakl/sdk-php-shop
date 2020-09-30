<?php
namespace Mirakl\MCM\Front\Request\Catalog\Product;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MCM\Front\Domain\Collection\Product\ProductSynchronizeCollection;
use Mirakl\MCM\Front\Domain\Product\Synchronization\ProductSynchronizeTracking;

/**
 * (CM21) Synchronize products
 *
 * Synchronize products from your system to Mirakl Catalog Manager. This API can be used to:
 *   -> Confirm integration of products previously exported: in this case just send the mirakl_product_id and your own product_sku
 *   -> Report integration errors of products previously exported: in this case send the mirakl_product_id and the integration_errors values
 *   -> Create new products: in this case send your own sku and complete product data
 *   -> Accept or reject products: in this case add an acceptance entry with the status ACCEPTED or REJECTED. If the status is REJECTED, define the reason_code and an optional message
 *   -> Update products: in this case send your own sku, the mirakl_product_id, additional product data and acceptance status
 *
 * @see \Mirakl\MCM\Front\Domain\Product\Synchronization\ProductSynchronization
 * @see \Mirakl\MCM\Front\Domain\Product\Synchronization\ProductSynchronizeTracking
 *
 * @method  ProductSynchronizeCollection  getProducts()
 * @method  $this                         setProducts(array|ProductSynchronizeCollection $synchronizeProduct)
 *
 * Example:
 *
 * <code>
 * <?php
 *
 * require 'vendor/autoload.php';
 *
 * use Mirakl\MCM\Front\Client\FrontApiClient as MiraklApiClient;
 * use Mirakl\MCM\Front\Request\Catalog\Product\ProductSynchronizationRequest;
 * use Mirakl\MCM\Front\Domain\Collection\Product\ProductSynchronizeCollection;
 * use Mirakl\MCM\Front\Domain\Product\Synchronization\ProductSynchronization;
 *
 * // Environment parameters
 * $url = 'https://your.env/api';
 * $apiKey = '23456c2a-6b1a-3vda-97c8-97ebf79630c0';
 *
 * try {
 * // Products to synchronize
 * $productCollection = new ProductSynchronizeCollection();
 * $product = new ProductSynchronization();
 *
 * $product->confirmProduct('abc5-4cf1-acdb-56152a77bc56', 'SH0001');
 * $productCollection->add($product);
 *
 * // Building request
 * $request = new ProductSynchronizationRequest($productCollection);
 *
 * // Instantiating the Mirakl API Client
 * $api = new MiraklApiClient($url, $apiKey);
 *
 * // Calling the API
 * $result = $api->synchronizeProduct($request);
 *
 * // \Mirakl\MCM\Front\Domain\Product\Synchronization\ProductSynchronizeTracking
 * var_dump($result); // decorated response
 *
 * // Get the tracking Id
 * $trackingId = $result->getTrackingId();
 * var_dump($trackingId);
 *
 * // You can also retrieve raw response by using run() method of API client:
 * $result = $api->run($request); // or $api->raw()->synchronizeProduct($request)
 * //var_dump($result); // returns \Psr\Http\Message\ResponseInterface
 *
 * } catch (\Exception $e) {
 * // An exception is thrown if object requested is not found or if an error occurs
 * var_dump($e->getTraceAsString());
 * }
 * </code>
 */
class ProductSynchronizationRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/mcm/products/synchronization';

    /**
     * @var array
     */
    public $bodyParams = ['products'];

    /**
     * @var array
     */
    protected static $dataTypes = [
      'products' => [ProductSynchronizeCollection::class, 'create'],
    ];

    /**
     * @param ProductSynchronizeCollection $productSynchronizeCollection
     */
    public function __construct(ProductSynchronizeCollection $productSynchronizeCollection)
    {
        parent::__construct();
        $this->setProducts($productSynchronizeCollection);
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        return $this->getProducts()->toArray();
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ProductSynchronizeTracking::decorator();
    }
}