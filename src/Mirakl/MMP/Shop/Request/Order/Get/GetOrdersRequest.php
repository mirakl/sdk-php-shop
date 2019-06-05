<?php
namespace Mirakl\MMP\Shop\Request\Order\Get;

use Mirakl\MMP\Common\Request\Order\AbstractGetOrdersRequest;
use Mirakl\MMP\Shop\Domain\Collection\Order\ShopOrderCollection;

/**
 * (OR11) Retrieve orders
 *
 * Sort by creation date, order identifier, shop name and then by index of the order line
 * This API uses pagination by default and will return 10 orders
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Get\GetOrdersRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
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
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ShopOrderCollection::decorator('orders');
    }
}