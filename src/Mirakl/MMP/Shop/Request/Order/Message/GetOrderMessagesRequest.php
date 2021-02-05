<?php
namespace Mirakl\MMP\Shop\Request\Order\Message;

use Mirakl\MMP\Common\Request\Order\Message\AbstractGetOrderMessagesRequest;

/**
 * (M01) List messages of an order (sort by creation date)
 * By default, all sent and received messages are listed
 * Note: this resource supports pagination and will return 10 messages
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Message\GetOrderMessagesRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new CreateOrderMessageRequest('ORDER_ID');
 * $request->setReceived(false); // Optional (true: received by customer, false: sent to customer, null (default): both)
 * $result = $api->getOrderMessages($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Message\OrderMessageCollection
 * </code>
 */
class GetOrderMessagesRequest extends AbstractGetOrderMessagesRequest
{}