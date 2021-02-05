<?php
namespace Mirakl\MMP\Shop\Request\Shop\Document;

use Mirakl\MMP\Common\Request\Shop\Document\AbstractDeleteShopDocumentRequest;

/**
 * (S33) Delete document associated to a shop
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
 *   $request = new \Mirakl\MMP\Shop\Request\Shop\Document\DeleteShopDocumentRequest('2345');
 *
 *   // Instantiating the Mirakl API Client
 *   $api = new MiraklApiClient($url, $apiKey, $shopId);
 *
 *   // Calling the API
 *   $result = $api->deleteShopDocument($request);
 *
 *   var_dump($result);
 *
 *   // You can also retrieve raw response by using run() method of API client:
 *   $result = $api->run($request); // or $api->raw()->deleteShopDocument($request)
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
class DeleteShopDocumentRequest extends AbstractDeleteShopDocumentRequest
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