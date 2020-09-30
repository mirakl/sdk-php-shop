<?php
namespace Mirakl\MMP\FrontOperator\Request\Order\Workflow;

use Mirakl\MMP\Common\Request\Order\AbstractOrderRequest;

/**
 * (OR27) Valid the reception in operator store of a "Click & Collect" order which is in shipping or shipped state
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Order\Workflow\ToCollectOrderRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new ToCollectOrderRequest('DKFSLFKZ-SDF993-A');
 *
 * $api->collectOrder($request);
 *
 * </code>
 */
class ToCollectOrderRequest extends AbstractOrderRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/to_collect';
}