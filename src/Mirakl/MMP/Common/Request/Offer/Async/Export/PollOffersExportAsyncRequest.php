<?php
namespace Mirakl\MMP\Common\Request\Offer\Async\Export;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Offer\Async\Export\PollOffersExportAsyncStatusResult;

/**
 * (OF53) Poll the status of an asynchronous offers export (OF52)
 *
 * @method  string  getTrackingId()
 * @method  string  setTrackingId(string $trackingId)
 *
 * <code>
 *
 * require 'vendor/autoload.php';
 *
 * use Mirakl\MMP\Common\Client\CommonApiClient as MiraklApiClient;
 * use Mirakl\MMP\Common\Request\Offer\Async\Export\PollOffersExportAsyncRequest;
 *
 * // Environment parameters
 * $url = 'https://your.env/api';
 * $apiKey = '49936c2a-6b1a-4e0a-97c8-97bbf77630c0';
 *
 * try {
 * // Building request
 * $trackingId = '9091133f-bffd-45f2-9495-0649a5c2485d';
 * $request = new PollOffersExportAsyncRequest($trackingId);
 *
 * // Instantiating the Mirakl API Client
 * $api = new MiraklApiClient($url, $apiKey);
 *
 * // Calling the API
 * $result = $api->pollOffersExportAsyncStatus($request);
 *
 * // \Mirakl\MMP\Common\Domain\Offer\Async\Export\PollOffersExportAsyncStatusResult
 * var_dump($result); // decorated response
 *
 * } catch (\Exception $e) {
 * // An exception is thrown if object requested is not found or if an error occurs
 * var_dump($e->getTraceAsString());
 * }
 *
 * </code>
 */
class PollOffersExportAsyncRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/offers/export/async/status/{tracking_id}';

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
        return PollOffersExportAsyncStatusResult::decorator();
    }
}