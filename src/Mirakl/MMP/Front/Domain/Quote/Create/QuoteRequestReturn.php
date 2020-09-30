<?php
namespace Mirakl\MMP\Front\Domain\Quote\Create;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Front\Domain\Quote\Get\QuoteRequest;

/**
 * @method  QuoteRequest        getQuoteRequest()
 * @method  $this               setQuoteRequest(array|QuoteRequest $quoteRequest)
 * @method  QuoteRequestError   getQuoteRequestError()
 * @method  $this               setQuoteRequestError(array|QuoteRequestError $quoteRequestError)
 */
class QuoteRequestReturn extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'quote_request_created' => 'quote_request',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'quote_request'       => [QuoteRequest::class, 'create'],
        'quote_request_error' => [QuoteRequestError::class, 'create'],
    ];
}