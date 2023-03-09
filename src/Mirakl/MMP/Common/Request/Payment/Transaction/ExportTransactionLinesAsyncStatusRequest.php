<?php
namespace Mirakl\MMP\Common\Request\Payment\Transaction;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Payment\Transaction\ExportTransactionLinesAsyncStatus;

/**
 * (TL04) Poll the status of an asynchronous transaction log export (TL03)
 *
 * @method string getTrackingId()
 * @method string setTrackingId(string $trackingId)
 *
 * Example:
 *
 * <code>
 * require 'vendor/autoload.php';
 *
 * use Mirakl\MMP\Common\Client\CommonApiClient as MiraklApiClient;
 * use Mirakl\MMP\Common\Request\Payment\Transaction\ExportTransactionLinesAsyncStatusRequest;
 *
 * // Environment parameters
 * $url = 'https://your.env/api';
 * $apiKey = '49936c2a-6b1a-4e0a-97c8-97bbf77630c0';
 *
 * try {
 * // Building request
 * $trackingId = '1b164045-49d7-4b4d-9751-66465f8f5298';
 * $request = new ExportTransactionLinesAsyncStatusRequest($trackingId);
 *
 * // Instantiating the Mirakl API Client
 * $api = new MiraklApiClient($url, $apiKey);
 *
 * // Calling the API
 * $result = $api->pollExportTransactionLinesAsyncStatus($request);
 *
 * var_dump($result); // see Mirakl\MMP\Common\Domain\Payment\Transaction\ExportTransactionLinesAsyncStatus
 *
 * } catch (\Exception $e) {
 * // An exception is thrown if object requested is not found or if an error occurs
 * var_dump($e->getTraceAsString());
 * }
 * </code>
 */
class ExportTransactionLinesAsyncStatusRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/sellerpayment/transactions_logs/async/status/{tracking_id}';

    /**
     * @var array
     */
    protected $uriVars = [
        '{tracking_id}' => 'tracking_id'
    ];

    /**
     * @param string $trackingId
     */
    public function __construct($trackingId)
    {
        parent::__construct();
        $this->setTrackingId($trackingId);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ExportTransactionLinesAsyncStatus::decorator();
    }
}