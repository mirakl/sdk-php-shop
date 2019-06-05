<?php
namespace Mirakl\MMP\Shop\Request\Order\Workflow;

use Mirakl\MMP\Common\Request\Order\AbstractOrderRequest;

/**
 * (OR29) Cancel an order
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