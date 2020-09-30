<?php
namespace Mirakl\MMP\Front\Request\Quote\Message;

use Mirakl\MMP\Common\Request\Document\AbstractDocumentsDownloadRequest;

/**
 * (Q06) Download documents attached on quote request message or shop quote request message
 *
 * @method  string  getDocumentId()
 * @method  $this   setDocumentId(string $documentId)
 * @method  string  getQuoteRequestMessageId()
 * @method  $this   setQuoteRequestMessageId(string $quoteRequestMessageId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Quote\Message\QuoteRequestMessageDocumentsRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new QuoteRequestMessageDocumentsRequest('QuoteRequestMessageId', 'DocumentId');
 *
 * $result = $api->downloadQuoteRequestMessageDocuments($request);
 * // $result => @see \Mirakl\Core\Domain\FileWrapper
 * </code>
 */
class QuoteRequestMessageDocumentsRequest extends AbstractDocumentsDownloadRequest
{
    /**
     * @var string
     */
    protected $endpoint = 'quote_request/message/{quote_request_message_id}/documents';

    /**
     * @var array
     */
    protected $uriVars = [
        '{quote_request_message_id}' => 'quote_request_message_id',
    ];

    /**
     * @var array
     */
    public $queryParams = ['document_id'];

    /**
     * @param   string      $quoteRequestMessageId
     * @param   string|null $documentId
     */
    public function __construct($quoteRequestMessageId, $documentId = null)
    {
        parent::__construct();
        $this->setQuoteRequestMessageId($quoteRequestMessageId);

        if (null !== $documentId) {
            $this->setDocumentId($documentId);
        }
    }
}