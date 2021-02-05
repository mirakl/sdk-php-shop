<?php
namespace Mirakl\MMP\Shop\Request\Order\Adjust;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Adjust\CreatedAdjustmentCollection;
use Mirakl\MMP\Shop\Domain\Collection\Order\Adjust\AdjustOrderLineCollection;

/**
 * (OR32) List order's documents
 *
 * @method  AdjustOrderLineCollection   getOrderLines()
 * @method  $this                       setOrderLines(array|AdjustOrderLineCollection $orderLines)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Adjust\AdjustOrderLinesRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $adjustOrderLine1 = new AdjustOrderLine();
 * $adjustOrderLine1->setOrderLineId('order-1-A-1');
 * $adjustOrderLine1->setActualMeasurement(20.34443);
 *
 * $adjustOrderLine2 = new AdjustOrderLine();
 * $adjustOrderLine2->setOrderLineId('order-2-A-1');
 * $adjustOrderLine2->setActualMeasurement(1);
 *
 * $request = new AdjustOrderLinesRequest([$adjustOrderLine1, $adjustOrderLine2]);
 * $result = $api->adjustOrderLines($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Adjust\CreatedAdjustmentCollection
 * </code>
 */
class AdjustOrderLinesRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/orders/adjust';

    /**
     * @var array
     */
    public $bodyParams = ['order_lines'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_lines' => [AdjustOrderLineCollection::class, 'create'],
    ];

    /**
     * @param   array|AdjustOrderLineCollection $orderLines
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
        return CreatedAdjustmentCollection::decorator('order_lines_adjusted');
    }
}