<?php
namespace Mirakl\MMP\Common\Request\Order;

use Mirakl\Core\Request\AbstractRequest;

/**
 * @method  string  getOrderId()
 * @method  $this   setOrderId(string $orderId)
 */
abstract class AbstractOrderRequest extends AbstractRequest
{
    /**
     * @var array
     */
    protected $uriVars = [
        '{order}' => 'order_id'
    ];

    /**
     * @param   string  $orderId
     */
    public function __construct($orderId)
    {
        parent::__construct();
        $this->setOrderId($orderId);
    }
}