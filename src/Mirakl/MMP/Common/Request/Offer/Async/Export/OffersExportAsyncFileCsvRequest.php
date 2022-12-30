<?php
namespace Mirakl\MMP\Common\Request\Offer\Async\Export;

use Mirakl\Core\Client\ApiClientInterface;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Response\Decorator\CsvTrait as CsvResponseDecorator;

/**
 * (OF54) Retrieve offers CSV file once asynchronous offer export is complete (OF52)
 *
 * <code>
 *
 * require 'vendor/autoload.php';
 *
 * use Mirakl\MMP\Common\Client\CommonApiClient as MiraklApiClient;
 * use Mirakl\MMP\Common\Request\Offer\Async\Export\OffersExportAsyncFileCsvRequest;
 *
 * // Environment parameters
 * $url = 'https://your.env/api';
 * $apiKey = '49936c2a-6b1a-4e0a-97c8-97bbf77630c0';
 *
 * try {
 * // Building request
 *
 * $fileUrl = 'https://myserver/api/offers/export/async/file/3b082453-b2a0-4fdd-bf30-7ab4bbd0b97b?file=of52-export2F3b082453-b2a0-4fdd-bf30-7ab4bbd0b97b%2F0.csv';
 * $request = new OffersExportAsyncFileCsvRequest($fileUrl);
 *
 * // Instantiating the Mirakl API Client
 * $api = new MiraklApiClient($url, $apiKey);
 *
 * // Calling the API
 * $result = $api->getOffersExportAsyncFileCsv($request);
 *
 * // Mirakl\Core\Domain\FileWrapper
 * var_dump($result); // decorated response
 *
 * // Get the stream file
 * $streamFile = $result->getFile();
 * var_dump($streamFile); // returns \SplTempFileObject
 *
 * } catch (\Exception $e) {
 *  // An exception is thrown if object requested is not found or if an error occurs
 *  var_dump($e->getTraceAsString());
 * }
 *
 * </code>
 */
class OffersExportAsyncFileCsvRequest extends AbstractRequest
{
    use CsvResponseDecorator;

    /**
     * @var string
     */
    protected $fileUrl;

    /**
     * @param string $fileUrl
     */
    public function __construct($fileUrl)
    {
        parent::__construct();
        $this->setFileUrl($fileUrl);
    }

    /**
     * @param $fileUrl
     */
    public function setFileUrl($fileUrl)
    {
        $this->fileUrl = $fileUrl;
    }

    /**
     * @inheritdoc
     */
    public function run(ApiClientInterface $api)
    {
        return $this->getResponseDecorator()->decorate($api->getClient()->get($this->fileUrl));
    }
}