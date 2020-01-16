<?php
namespace Mirakl\MMP\Shop\Request\Order\Workflow;

use Mirakl\MMP\Common\Request\Order\AbstractOrderRequest;

/**
 * (OR29) Cancel an order
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Workflow\CancelOrderRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new CancelOrderRequest('ORDER_ID');
 *
 * $api->cancelOrder($request);
 * </code>
 */
class CancelOrderRequest extends AbstractOrderRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/cancel';
}