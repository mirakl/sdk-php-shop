<?php
namespace Mirakl\MMP\Common\Request\Order\Ship;

use Mirakl\MMP\Common\Request\Order\AbstractOrderRequest;

/**
 * (OR24) Valid the shipment of the order which is in @see AbstractOrderStatus::SHIPPING state
 */
abstract class AbstractShipOrderRequest extends AbstractOrderRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/ship';
}