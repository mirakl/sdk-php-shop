<?php
namespace Mirakl\MMP\FrontOperator\Request\Order;

use Mirakl\MMP\Common\Request\Order\AbstractGetOrdersRequest;
use Mirakl\MMP\FrontOperator\Domain\Collection\Order\OrderCollection;

/**
 * (OR11) Retrieve orders
 *
 * Sort by creation date, order identifier, shop name and then by index of the order line
 * This API uses pagination by default and will return 10 orders
 *
 * @method  array   getCommercialIds()
 * @method  $this   setCommercialIds(array $ids)
 * @method  array   getCustomerIds()
 * @method  $this   setCustomerIds(array $ids)
 * @method  array   getOfferIds()
 * @method  $this   setOfferIds(array $ids)
 * @method  array   getProductSkus()
 * @method  $this   setProductSkus(array $skus)
 * @method  array   getShopIds()
 * @method  $this   setShopIds(array $ids)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Order\GetOrdersRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new GetOrdersRequest();
 * // Optional parameters
 * $request->setOrderIds(['ORDER_ID_1', 'ORDER_ID_2'])
 *     ->setOffset(10)
 *     ->setMax(25)
 *     ->setPaginate(false)
 *     ->setStartDate('2015-06-09')
 *     ->setEndDate('2015-06-30');
 * $result = $api->getOrders($request);
 * // $result => @see \Mirakl\MMP\Shop\Domain\Collection\Order\ShopOrderCollection
 * </code>
 */
class GetOrdersRequest extends AbstractGetOrdersRequest
{
    /**
     * @var array
     */
    public $queryParams = [
        'order_ids',
        'order_states' => 'order_state_codes',
        'commercial_ids',
        'customer_ids',
        'offer_ids',
        'product_skus',
        'shop_ids',
        'start_update_date',
        'end_update_date',
        'channel_codes',
        'customer_debited',
        'payment_workflow',
        'only_null_channel',
        'has_incident',
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return OrderCollection::decorator('orders');
    }
}