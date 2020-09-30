<?php
namespace Mirakl\MMP\Front\Request\Quote\Order;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Front\Domain\Quote\Order\OrderFromQuote;
use Mirakl\MMP\FrontOperator\Domain\Collection\Order\OrderCollection;

/**
 * (Q07) Create orders from a quote
 *
 * @method  OrderFromQuote  getOrder()
 * @method  $this           setOrder(array|OrderFromQuote $order)
 * @method  string          getQuoteId()
 * @method  $this           setQuoteId(string $quoteId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Quote\Message\ShopQuoteRequestMessageRequest;
 * use Mirakl\MMP\Front\Domain\Quote\Order\OrderFromQuote;
 * use Mirakl\MMP\Front\Domain\Quote\Order\QuoteOrderLine;
 * use Mirakl\MMP\Front\Request\Quote\Order\PlaceOrderFromQuoteRequest;
 * use Mirakl\MMP\Common\Domain\AdditionalFieldValue;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $orderLine = new QuoteOrderLine();
 * $orderLine->setLeadtimeToShip(2);
 * $orderLine->setOrderLineId('order-54612-1');
 * $orderLine->setQuoteLineId('quote-1313-1');
 * $orderLine->setOrderLineAdditionalFields([new AdditionalFieldValue('message', 'my message','LIST')]);
 *
 * $paymentInfo = new CreateOrderPaymentInfo();
 * $paymentInfo->setImprintNumber('1561354561');
 * $paymentInfo->setPaymentType('CREDIT_CARD');
 *
 * $createOrderFromQuote = new OrderFromQuote();
 * $createOrderFromQuote->setChannelCode('WEB');
 * $createOrderFromQuote->setCommercialId('order-54612');
 * $createOrderFromQuote->setLines([$orderLine]);
 * $createOrderFromQuote->setOrderAdditionalFields([new AdditionalFieldValue('wrapAsGift', 'true','BOOLEAN')]);
 * $createOrderFromQuote->setPaymentDuration(66);
 * $createOrderFromQuote->setPaymentInfo($paymentInfo);
 * $createOrderFromQuote->setPaymentWorkflow('PAY_ON_ACCEPTANCE');
 * $createOrderFromQuote->setScored(true);
 *
 * $request = new PlaceOrderFromQuoteRequest('quoteID', $createOrderFromQuote);
 *
 * $result = $api->placeOrderFromQuote($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Collection\Order\OrderCollection
 * </code>
 */
class PlaceOrderFromQuoteRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/quote_request/{quote_id}/place';

    /**
     * @var array
     */
    protected $uriVars = [
        '{quote_id}' => 'quote_id',
    ];

    /**
     * @var array
     */
    public $bodyParams = ['order'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'order' => [OrderFromQuote::class, 'create'],
    ];

    /**
     * @param   string                  $quoteId
     * @param   OrderFromQuote|array    $order
     */
    public function __construct($quoteId, $order)
    {
        parent::__construct();
        $this->setQuoteId($quoteId);
        $this->setOrder($order);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return OrderCollection::decorator('orders');
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        return $this->getOrder()->toArray();
    }
}