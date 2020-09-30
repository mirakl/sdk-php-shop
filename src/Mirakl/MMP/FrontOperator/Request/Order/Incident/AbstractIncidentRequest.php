<?php
namespace Mirakl\MMP\FrontOperator\Request\Order\Incident;

use Mirakl\MMP\Common\Request\Order\AbstractOrderRequest;

/**
 * @method  string  getOrderLineId()
 * @method  $this   setOrderLineId(string $orderLineId)
 * @method  string  getReasonCode()
 * @method  $this   setReasonCode(string $reasonCode)
 */
abstract class AbstractIncidentRequest extends AbstractOrderRequest
{
    /**
     * @var array
     */
    public $bodyParams = ['reason_code'];

    /**
     * @var array
     */
    protected $uriVars = [
        '{order}' => 'order_id',
        '{line}' => 'order_line_id',
    ];

    /**
     * @param   string  $orderId
     * @param   string  $orderLineId
     * @param   string  $reasonCode
     */
    public function __construct($orderId, $orderLineId, $reasonCode)
    {
        parent::__construct($orderId);
        $this->setOrderLineId($orderLineId);
        $this->setReasonCode($reasonCode);
    }
}