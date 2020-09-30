<?php
namespace Mirakl\MMP\Front\Request\Quote\Scoring;

use Mirakl\Core\Request\AbstractRequest;

/**
 * (Q03) Invalidate a quote request which is in 'STAGING' state
 *
 * @method  string  getQuoteRequestId()
 * @method  $this   setQuoteRequestId(string $quoteRequestId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Quote\Scoring\InvalidateQuoteRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new InvalidateQuoteRequest('QuoteRequestID');
 * $api->invalidateQuoteRequest($request);
 * </code>
 */
class InvalidateQuoteRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/quote_request/{quote_request_id}/invalid';

    /**
     * @var array
     */
    protected $uriVars = [
        '{quote_request_id}' => 'quote_request_id'
    ];

    /**
     * @param   string  $quoteRequestId
     */
    public function __construct($quoteRequestId)
    {
        parent::__construct();
        $this->setQuoteRequestId($quoteRequestId);
    }
}