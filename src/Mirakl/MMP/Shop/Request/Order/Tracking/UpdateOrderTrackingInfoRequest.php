<?php
namespace Mirakl\MMP\Shop\Request\Order\Tracking;

use Mirakl\MMP\Common\Request\Order\Tracking\AbstractUpdateOrderTrackingInfoRequest;

/**
 * (OR23) Update carrier tracking information of a given order
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Tax\UpdateOrderTrackingInfoRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new UpdateOrderTrackingInfoRequest('ORDER_ID', [
 *     'carrier_code'       => 'FEDEX',
 *     'carrier_name'       => 'FedEx',
 *     'carrier_url'        => 'https://fex.ex?n=JFSKFJSDKF0923949',
 *     'tracking_number'    => 'JFSKFJSDKF0923949',
 * ]);
 * $api->updateOrderTrackingInfo($request);
 * </code>
 */
class UpdateOrderTrackingInfoRequest extends AbstractUpdateOrderTrackingInfoRequest
{}