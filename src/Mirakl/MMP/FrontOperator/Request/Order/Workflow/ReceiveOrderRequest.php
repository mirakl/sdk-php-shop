<?php
namespace Mirakl\MMP\FrontOperator\Request\Order\Workflow;

use Mirakl\MMP\Common\Request\Order\AbstractOrderRequest;

/**
 * (OR25) Valid the reception of the order which is in shipping or shipped state
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Order\Workflow\ReceiveOrderRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new ReceiveOrderRequest('DKFSLFKZ-SDF993-A');
 *
 * $api->receiveOrder($request);
 *
 * </code>
 */
class ReceiveOrderRequest extends AbstractOrderRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/receive';
}