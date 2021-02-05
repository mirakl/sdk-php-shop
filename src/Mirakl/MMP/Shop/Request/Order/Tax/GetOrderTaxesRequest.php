<?php
namespace Mirakl\MMP\Shop\Request\Order\Tax;

use Mirakl\MMP\Common\Request\Order\Tax\AbstractGetOrderTaxesRequest;
use Mirakl\MMP\Shop\Domain\Collection\Order\Tax\OrderTaxCollection;

/**
 * (OR75) Get the order taxes defined on the platform
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Tax\GetOrderTaxesRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new GetOrderTaxesRequest();
 * $result = $api->getOrderTaxes($request);
 * // $result => @see \Mirakl\MMP\Shop\Domain\Collection\Order\Tax\OrderTaxCollection
 * </code>
 */
class GetOrderTaxesRequest extends AbstractGetOrderTaxesRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return OrderTaxCollection::decorator('taxes');
    }
}