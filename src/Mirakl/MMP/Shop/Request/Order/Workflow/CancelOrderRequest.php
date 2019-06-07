<?php
namespace Mirakl\MMP\Shop\Request\Order\Workflow;

use Mirakl\MMP\Common\Request\Order\AbstractOrderRequest;

/**
 * (OR29) Cancel an order
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Order\Workflow\CancelOrderRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new CancelOrderRequest('ORDER_ID');
 *
 * $api->cancelOrder($request);
 *
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