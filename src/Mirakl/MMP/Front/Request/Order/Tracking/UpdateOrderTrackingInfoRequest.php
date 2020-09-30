<?php
namespace Mirakl\MMP\Front\Request\Order\Tracking;

use Mirakl\MMP\Common\Request\Order\Tracking\AbstractUpdateOrderTrackingInfoRequest;

/**
 * (OR23) Update carrier tracking information of a given order
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Order\Tax\UpdateOrderTrackingInfoRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
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