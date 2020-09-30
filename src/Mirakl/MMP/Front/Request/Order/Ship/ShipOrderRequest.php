<?php
namespace Mirakl\MMP\Front\Request\Order\Ship;

use Mirakl\MMP\Common\Request\Order\Ship\AbstractShipOrderRequest;

/**
 * (OR24) Valid the shipment of the order which is in @see AbstractOrderStatus::SHIPPING state
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Order\Ship\ShipOrderRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new ShipOrderRequest('ORDER_ID');
 * $api->shipOrder($request);
 * </code>
 */
class ShipOrderRequest extends AbstractShipOrderRequest
{}