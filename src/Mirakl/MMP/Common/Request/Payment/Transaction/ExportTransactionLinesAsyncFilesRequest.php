<?php
namespace Mirakl\MMP\Common\Request\Payment\Transaction;

use Mirakl\Core\Client\ApiClientInterface;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Response\Decorator\JsonTrait as JsonResponseDecorator;

/**
 * (TL05) Retrieve transaction logs files once asynchronous transaction logs export is complete (TL04)
 *
 * Example:
 *
 * <code>
 * require 'vendor/autoload.php';
 *
 * use Mirakl\MMP\Common\Client\CommonApiClient as MiraklApiClient;
 * use Mirakl\MMP\Common\Request\Payment\Transaction\ExportTransactionLinesAsyncFilesRequest;
 *
 * // Environment parameters
 * $url = 'https://your.env/api';
 * $apiKey = '49936c2a-6b1a-4e0a-97c8-97bbf77630c0';
 *
 * try {
 * // Building request
 *
 * $fileUrl = 'https://server/api/sellerpayment/transactions_logs/export/async/file/1b164045-49d7-4b4d-9751-66465f8f5298?file=0.json';
 * $request = new ExportTransactionLinesAsyncFilesRequest($fileUrl);
 *
 * // Instantiating the Mirakl API Client
 * $api = new MiraklApiClient($url, $apiKey);
 *
 * // Calling the API
 * $result = $api->retrieveExportTransactionLinesAsyncFiles($request);
 *
 * // Mirakl\Core\Domain\FileWrapper
 * var_dump($result); // decorated response
 *
 * // Get the stream file
 * $streamFile = $result->getFile();
 * var_dump($streamFile); // returns \SplTempFileObject
 *
 * } catch (\Exception $e) {
 * // An exception is thrown if object requested is not found or if an error occurs
 * var_dump($e->getTraceAsString());
 * }
 *
 * </code>
 */
class ExportTransactionLinesAsyncFilesRequest extends AbstractRequest
{
    use JsonResponseDecorator;

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
     * @param string $fileUrl
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