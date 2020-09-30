<?php
namespace Mirakl\MCM\Front\Request\Catalog\Product;

use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;

/**
 * (CM51) Export products CSV file
 *
 * Example:
 *
 * <code>
 * require 'vendor/autoload.php';
 *
 * use Mirakl\MCM\Front\Client\FrontApiClient as MiraklApiClient;
 * use Mirakl\MCM\Front\Request\Catalog\Product\ProductExportCsvRequest;
 *
 * // Environment parameters
 * $url = 'https://your.env/api';
 * $apiKey = '40956c2a-6b1ab-4e0a-97c8-97ebf78630c0';
 *
 * try {
 * // Building request
 * $request = new ProductExportCsvRequest();
 *
 * // Instantiating the Mirakl API Client
 * $api = new MiraklApiClient($url, $apiKey);
 *
 * // Set updated since parameter date
 * $request->setUpdatedSince(new \DateTime('2017-11-08T14:07:00+0000'));
 *
 * // Calling the API
 * $result = $api->exportCsvProducts($request);
 *
 * // Mirakl\Core\Domain\FileWrapper
 * var_dump($result); // decorated response
 *
 * // You can also retrieve raw response by using run() method of API client:
 * $result = $api->run($request); // or $api->raw()->exportCsvProducts($request)
 * var_dump($result); // returns \Psr\Http\Message\ResponseInterface

 * // Get the stream file
 * $streamFile =  $result->getFile();
 * var_dump($streamFile); // returns \SplTempFileObject
 *
 * } catch (\Exception $e) {
 * // An exception is thrown if object requested is not found or if an error occurs
 * var_dump($e);
 * }
 * </code>
 */
class ProductExportCsvRequest extends AbstractProductExportRequest
{
    use CsvResponseDecorator;

    /**
     * @inheritdoc
     */
    public function __construct()
    {
        parent::__construct();
        $this->setOptions(['headers' => ['Accept' => 'text/csv']]);
    }
}