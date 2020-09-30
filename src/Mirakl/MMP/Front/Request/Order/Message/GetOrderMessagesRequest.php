<?php
namespace Mirakl\MMP\Front\Request\Order\Message;

use Mirakl\MMP\Common\Request\Order\Message\AbstractGetOrderMessagesRequest;

/**
 * (OR41) (M01 is used instead) List messages of an order (sort by creation date)
 * By default, all sent and received messages are listed
 * Note: this resource supports pagination and will return 10 messages
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Order\Message\GetOrderMessagesRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new CreateOrderMessageRequest('ORDER_ID');
 * $request->setReceived(false); // Optional (true: received by customer, false: sent to customer, null (default): both)
 * $result = $api->getOrderMessages($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Message\OrderMessageCollection
 * </code>
 */
class GetOrderMessagesRequest extends AbstractGetOrderMessagesRequest
{}