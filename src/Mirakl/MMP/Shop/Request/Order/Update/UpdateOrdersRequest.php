<?php
namespace Mirakl\MMP\Shop\Request\Order\Update;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Shop\Domain\Collection\Order\Update\UpdatedOrderAndErrorCollection;
use Mirakl\MMP\Shop\Domain\Collection\Order\Update\UpdateOrderCollection;

/**
 * (OR04) Patch update orders
 *
 * @method  UpdateOrderCollection   getOrders()
 * @method  $this                   setOrders(array|UpdateOrderCollection $orders)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Domain\Collection\Order\Update\UpdateOrderCollection;
 * use Mirakl\MMP\Shop\Domain\Order\Update\UpdateOrder;
 * use Mirakl\MMP\Shop\Request\Order\Update\UpdateOrdersRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $updateOrder = new UpdateOrder();
 * $updateOrder->setOrderId('ORDER_ID_1');
 *
 * $collection = new UpdateOrderCollection();
 * $collection->add($updateOrder);
 *
 * $request = new UpdateOrdersRequest($collection);
 *
 * $result = $api->updateOrders($request);
 *
 * // $result => @see \Mirakl\MMP\Shop\Domain\Collection\Order\Update\UpdatedOrderAndErrorCollection
 * </code>
 */
class UpdateOrdersRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders';

    /**
     * @var array
     */
    public $bodyParams = ['orders'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'orders' => [UpdateOrderCollection::class, 'create'],
    ];

    /**
     * @param   array|UpdateOrderCollection $orders
     */
    public function __construct($orders)
    {
        parent::__construct();
        $this->setOrders($orders);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return UpdatedOrderAndErrorCollection::decorator('updated_orders');
    }
}