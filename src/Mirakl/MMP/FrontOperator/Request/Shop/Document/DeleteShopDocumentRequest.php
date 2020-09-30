<?php
namespace Mirakl\MMP\FrontOperator\Request\Shop\Document;

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
 * use Mirakl\MMP\FrontOperator\Client\FrontOperatorApiClient as MiraklApiClient;
 *
 * $url = 'https://your.env/api';
 * $apiKey = 'd8c6fad3-7ac9-42c9-82cf-716b83d6deab';
 *
 * try {
 *   // Building request
 *   $request = new \Mirakl\MMP\FrontOperator\Request\Shop\Document\DeleteShopDocumentRequest('2345');
 *
 *   // Instantiating the Mirakl API Client
 *   $api = new MiraklApiClient($url, $apiKey);
 *
 *   // Calling the API
 *   $result = $api->deleteShopDocument($request);
 *
 *   var_dump(get_class($result));
 *   var_dump($result); // decorated response
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
 */
class DeleteShopDocumentRequest extends AbstractDeleteShopDocumentRequest
{}