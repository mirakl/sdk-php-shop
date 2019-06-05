<?php
namespace Mirakl\MMP\Common\Request\Order\Tracking;

use Mirakl\MMP\Common\Domain\Order\Tracking\OrderTrackingInfo;
use Mirakl\MMP\Common\Request\Order\AbstractOrderRequest;

/**
 * (OR23) Update carrier tracking information of a given order
 *
 * @method  OrderTrackingInfo   getTrackingOrderInfo()
 * @method  $this               setTrackingOrderInfo(array|OrderTrackingInfo $trackingOrderInfo)
 */
abstract class AbstractUpdateOrderTrackingInfoRequest extends AbstractOrderRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/tracking';

    /**
     * @var array
     */
    public $bodyParams = ['tracking_order_info'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'tracking_order_info' => [OrderTrackingInfo::class, 'create'],
    ];

    /**
     * @param   string                  $orderId
     * @param   array|OrderTrackingInfo $trackingOrderInfo
     */
    public function __construct($orderId, $trackingOrderInfo)
    {
        parent::__construct($orderId);
        $this->setTrackingOrderInfo($trackingOrderInfo);
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        return $this->getTrackingOrderInfo()->toArray();
    }
}