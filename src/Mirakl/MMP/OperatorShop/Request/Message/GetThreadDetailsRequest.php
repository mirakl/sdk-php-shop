<?php
namespace Mirakl\MMP\OperatorShop\Request\Message;

use Mirakl\MMP\Common\Request\Message\AbstractGetThreadDetailsRequest;

/**
 * (M10) Retrieve a thread
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\OperatorShop\Request\Message\GetThreadDetailsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new GetThreadDetailsRequest('THREAD_ID');
 * $result = $api->getThreadDetails($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Message\Thread\ThreadDetails
 * </code>
 */
class GetThreadDetailsRequest extends AbstractGetThreadDetailsRequest
{}