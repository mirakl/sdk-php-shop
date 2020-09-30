<?php
namespace Mirakl\MMP\Operator\Request\Order\Tax;

use Mirakl\MMP\Common\Request\Order\Tax\AbstractGetOrderTaxesRequest;
use Mirakl\MMP\Front\Domain\Collection\Order\Tax\OrderTaxCollection;

/**
 * (OR75) Get the order taxes defined on the platform
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\Order\Tax\GetOrderTaxesRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new GetOrderTaxesRequest();
 * $result = $api->getOrderTaxes($request);
 * // $result => @see \Mirakl\MMP\Operator\Domain\Collection\Order\Tax\OrderTaxCollection
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