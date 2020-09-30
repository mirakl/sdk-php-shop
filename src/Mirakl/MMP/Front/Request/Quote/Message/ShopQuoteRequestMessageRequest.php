<?php
namespace Mirakl\MMP\Front\Request\Quote\Message;

use Mirakl\MMP\Common\Request\Document\AbstractDocumentsUploadRequest;
use Mirakl\MMP\Front\Domain\Quote\Message\CreatedQuoteRequestMessage;

/**
 * (Q05) Add a message to a quote request for a shop
 *
 * @method  string  getMessageBody()
 * @method  $this   setMessageBody(string $messageBody)
 * @method  string  getShopQuoteRequestId()
 * @method  $this   setShopQuoteRequestId(string $shopQuoteRequestId)
 * @method  string  getToType()
 * @method  $this   setToType(string $toType) One of \Mirakl\MMP\Common\Domain\UserType
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Quote\Message\ShopQuoteRequestMessageRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new QuoteRequestMessageDocumentsRequest('ShopQuoteRequestId', 'MessageBody', 'toType');
 *
 * $docs = new DocumentCollection();
 * $docs->add(new Document('fake body', 'test1.txt', 'FILE_TYPE_1'));
 * $docs->add(new Document('fake body', 'test2.txt', 'FILE_TYPE_2'));
 *
 * $request->setDocuments($docs);
 *
 * $result = $api->addMessageToQuoteRequest($request);
 * // $result => @see \Mirakl\MMP\Front\Domain\Quote\Message\CreatedQuoteRequestMessage
 * </code>
 */
class ShopQuoteRequestMessageRequest extends AbstractDocumentsUploadRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/quote_request/message';

    /**
     * @var array
     */
    public $bodyParams = ['shop_quote_request_id', 'message_body', 'to_type'];

    /**
     * @param   string  $shopQuoteRequestId
     * @param   string  $messageBody
     * @param   string  $toType
     */
    public function __construct($shopQuoteRequestId, $messageBody, $toType)
    {
        parent::__construct();
        $this->setShopQuoteRequestId($shopQuoteRequestId);
        $this->setMessageBody($messageBody);
        $this->setToType($toType);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return CreatedQuoteRequestMessage::decorator();
    }
}