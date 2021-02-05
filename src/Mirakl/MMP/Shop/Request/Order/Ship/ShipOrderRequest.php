<?php
namespace Mirakl\MMP\Shop\Request\Order\Ship;

use Mirakl\MMP\Common\Request\Order\Ship\AbstractShipOrderRequest;

/**
 * (OR24) Valid the shipment of the order which is in @see AbstractOrderStatus::SHIPPING state
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Ship\ShipOrderRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new ShipOrderRequest('ORDER_ID');
 * $api->shipOrder($request);
 * </code>
 */
class ShipOrderRequest extends AbstractShipOrderRequest
{}