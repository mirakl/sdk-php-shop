<?php
namespace Mirakl\MMP\Shop\Request\Order\Accept;

use Mirakl\MMP\Common\Request\Order\Accept\AbstractAcceptOrderRequest;

/**
 * (OR21) Accept or refuse order lines of an order which are in @see AbstractOrderStatus::WAITING_ACCEPTANCE state
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Accept\AcceptOrderRequest;
 * use Mirakl\MMP\Common\Domain\Order\Accept\AcceptOrderLine;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new AcceptOrderRequest('ORDER_ID', [
 *     new AcceptOrderLine(['id' => 'ORDER_ID', 'accepted' => true])
 * ]);
 * $api->acceptOrder($request);
 * </code>
 */
class AcceptOrderRequest extends AbstractAcceptOrderRequest
{}