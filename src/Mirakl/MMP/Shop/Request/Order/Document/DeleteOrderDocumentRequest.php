<?php
namespace Mirakl\MMP\Shop\Request\Order\Document;

use Mirakl\MMP\Common\Request\Order\Document\AbstractDeleteOrderDocumentsRequest;

/**
 * (OR76) Delete document attached to an order
 *
 * Example:
 *
 * <code>
 *
 * <?php
 * require 'vendor/autoload.php';
 *
 * use Mirakl\MMP\Shop\Client\ShopApiClient as MiraklApiClient;
 *
 * $url = 'https://your.env/api';
 * $apiKey = 'd8c6fad3-7ac9-42c9-83cf-716b83d6deab';
 * $shopId = '2003';
 *
 * try {
 *   // Building request
 *   $request = new \Mirakl\MMP\Shop\Request\Order\Document\DeleteOrderDocumentRequest('2345');
 *
 *   // Instantiating the Mirakl API Client
 *   $api = new MiraklApiClient($url, $apiKey, $shopId);
 *
 *   // Calling the API
 *   $result = $api->deleteOrderDocument($request);
 *
 *   var_dump($result);
 *
 *   // You can also retrieve raw response by using run() method of API client:
 *   $result = $api->run($request); // or $api->raw()->deleteOrderDocument($request)
 *   //var_dump($result); // returns \Psr\Http\Message\ResponseInterface
 *
 * } catch (\Exception $e) {
 *   // An exception is thrown if object requested is not found or if an error occurs
 *   var_dump($e->getTraceAsString());
 * }
 * </code>
 *
 * @method  string  getShopId()
 * @method  $this   setShopId(string $shopId)
 */
class DeleteOrderDocumentRequest extends AbstractDeleteOrderDocumentsRequest
{
    /**
     * @var array
     */
    public $queryParams = ['shop_id'];

    /**
     * @param   string  $documentId
     * @param   string  $shopId
     */
    public function __construct($documentId, $shopId = null)
    {
        if (!empty($shopId)) {
            $this->setShopId($shopId);
        }
        parent::__construct($documentId);
    }
}