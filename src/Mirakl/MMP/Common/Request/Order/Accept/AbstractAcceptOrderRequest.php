<?php
namespace Mirakl\MMP\Common\Request\Order\Accept;

use Mirakl\MMP\Common\Domain\Collection\Order\Accept\AcceptOrderLineCollection;
use Mirakl\MMP\Common\Request\Order\AbstractOrderRequest;

/**
 * (OR21) Accept or refuse order lines of an order which are in @see AbstractOrderStatus::WAITING_ACCEPTANCE state
 *
 * @method  AcceptOrderLineCollection   getOrderLines()
 * @method  $this                       setOrderLines(array|AcceptOrderLineCollection $orderLines)
 */
abstract class AbstractAcceptOrderRequest extends AbstractOrderRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/accept';

    /**
     * @var array
     */
    public $bodyParams = ['order_lines'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_lines' => [AcceptOrderLineCollection::class, 'create'],
    ];

    /**
     * @param   string                          $orderId
     * @param   array|AcceptOrderLineCollection $orderLines
     */
    public function __construct($orderId, $orderLines)
    {
        parent::__construct($orderId);
        $this->setOrderLines($orderLines);
    }
}