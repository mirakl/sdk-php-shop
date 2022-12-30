<?php
namespace Mirakl\MMP\Common\Request\Offer\Async\Export;

use Mirakl\Core\Client\ApiClientInterface;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferCollection;

/**
 * (OF54) Retrieve offers collection once asynchronous offer export is complete (OF52)
 *
 * **************************** Works only for JSON exports ****************************
 *
 * <code>
 *
 * require 'vendor/autoload.php';
 *
 * use Mirakl\MMP\Common\Client\CommonApiClient as MiraklApiClient;
 * use Mirakl\MMP\Common\Request\Offer\Async\Export\OffersExportAsyncFileRequest;
 *
 * // Environment parameters
 * $url = 'https://your.env/api';
 * $apiKey = '49936c2a-6b1a-4e0a-97c8-97bbf77630c0';
 *
 * try {
 * // Building request
 *
 * $fileUrl = 'https://myserver/api/offers/export/async/file/12adcde5-809e-48e8-bd?file=of52-export%2Fphp1-dev%2F12adcde5-698c8d2eee73%2F0.csv';
 * $request = new OffersExportAsyncFileRequest($fileUrl);
 *
 * // Instantiating the Mirakl API Client
 * $api = new MiraklApiClient($url, $apiKey);
 *
 * // Calling the API
 * $result = $api->getOffersExportAsyncFile($request);
 *
 * // \Mirakl\MMP\Common\Domain\Collection\Offer\Async\Export\AsyncExportOfferCollection
 * var_dump($result); // decorated response
 *
 * } catch (\Exception $e) {
 *  // An exception is thrown if object requested is not found or if an error occurs
 *  var_dump($e->getTraceAsString());
 * }
 *
 * </code>
 */
class OffersExportAsyncFileRequest extends AbstractRequest
{
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
    public function getResponseDecorator()
    {
        return AsyncExportOfferCollection::decorator();
    }

    /**
     * @inheritdoc
     */
    public function run(ApiClientInterface $api)
    {
        return $this->getResponseDecorator()->decorate($api->getClient()->get($this->fileUrl));
    }
}