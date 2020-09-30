<?php
namespace Mirakl\MMP\Front\Request\Quote;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\MMP\Common\Request\Document\AbstractFilesUploadRequest;
use Mirakl\MMP\Front\Domain\Collection\Quote\Create\CreateQuoteRequestCollection;
use Mirakl\MMP\Front\Domain\Collection\Quote\Create\QuoteRequestReturnCollection;

/**
 * (Q01) Create one or multiple quote requests
 *
 * Example:
 *
 * <code>
 * use Mirakl\Core\Domain\FileWrapper;
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Domain\Quote\Create\CreateQuoteRequest;
 * use Mirakl\MMP\Front\Request\Quote\CreateQuoteRequestsRequest;
 *
 * // Initialize API client
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * // Create a quote request according to class:
 * @see \Mirakl\MMP\Front\Domain\Quote\Create\CreateQuoteRequest
 * $quoteRequest1 = new CreateQuoteRequest();
 * $quoteRequest1->setData(...); // Custom quote request data
 *
 * $quoteRequests = [$quoteRequest1];
 *
 * // Create API request
 * $request = new CreateQuoteRequestsRequest($quoteRequests);
 *
 * // Add file of quote request #1
 * $file = new FileWrapper(new \SplFileObject('foobar.txt'));
 * $file->setFileName('test1.txt'); // Optional, only needed if file name in $quoteRequest1 is different than 'foobar.txt'
 * $request->addFile($file);
 *
 * $result = $api->createQuoteRequests($request);
 * // $result => @see \Mirakl\MMP\Front\Domain\Collection\Quote\Create\QuoteRequestReturnCollection
 * </code>
 *
 * @method  CreateQuoteRequestCollection    getCreateQuoteRequests()
 * @method  $this                           setCreateQuoteRequests(array|CreateQuoteRequestCollection $quoteRequests)
 */
class CreateQuoteRequestsRequest extends AbstractFilesUploadRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/quote_request';

    /**
     * @var array
     */
    public $bodyParams = ['create_quote_requests' => 'quote_requests'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'create_quote_requests' => [CreateQuoteRequestCollection::class, 'create'],
    ];

    /**
     * @param   CreateQuoteRequestCollection|array  $createQuoteRequests
     */
    public function __construct($createQuoteRequests)
    {
        parent::__construct();
        $this->setCreateQuoteRequests($createQuoteRequests);
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        $params = parent::getBodyParams();

        $params['quote_requests'] = ['quote_requests' => $this->getCreateQuoteRequests()->toArray()];

        return $params;
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return QuoteRequestReturnCollection::decorator('quote_request_returns');
    }
}