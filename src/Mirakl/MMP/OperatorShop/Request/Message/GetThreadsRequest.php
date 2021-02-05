<?php
namespace Mirakl\MMP\OperatorShop\Request\Message;

use Mirakl\MMP\Common\Request\Message\AbstractGetThreadsRequest;

/**
 * (M11) List all threads
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\OperatorShop\Request\Message\GetThreadsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new GetThreadsRequest('THREAD_ID');
 * $request->setEntityType('MMP_ORDER');
 * $request->setEntityId('ORDER_ID');
 * $result = $api->getThreads($request);
 * // $result => @see \Mirakl\Core\Response\Decorator\SeekableCollection
 * </code>
 */
class GetThreadsRequest extends AbstractGetThreadsRequest
{}