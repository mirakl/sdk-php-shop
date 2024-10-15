<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Request\Order\ShippingFrom;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Order\ShippingFrom\UpdateOrderLineShippingFromCollection;
use Mirakl\MMP\Common\Domain\Order\ShippingFrom\OrderLinesShippingFromUpdateResponse;

/**
 * (OR07) Update order line shipping origin
 *
 * @method UpdateOrderLineShippingFromCollection getOrderLines()
 * @method $this                                 setOrderLines(array|UpdateOrderLineShippingFromCollection $orderLines)
 */
abstract class AbstractUpdateOrderLinesShippingFromRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/shipping_from';

    /**
     * @var array
     */
    public $bodyParams = [
        'order_lines',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_lines' => [UpdateOrderLineShippingFromCollection::class, 'create'],
    ];

    /**
     * @param array|UpdateOrderLineShippingFromCollection $orderLines
     */
    public function __construct($orderLines)
    {
        parent::__construct();

        $this->setOrderLines($orderLines);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return OrderLinesShippingFromUpdateResponse::decorator();
    }
}
