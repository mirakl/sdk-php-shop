<?php
namespace Mirakl\MMP\Common\Request\Order\Cancelation;

use Mirakl\Core\Request\AbstractRequest;

/**
 * (OR30) Demand cancelations on order lines
 *
 * @method  string  getOrderTaxMode()
 * @method  $this   setOrderTaxMode(string $orderTaxMode)
 */
abstract class AbstractCreateCancelationsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/cancel';

    /**
     * @var array
     */
    public $bodyParams = ['cancelations', 'order_tax_mode'];
}
