<?php
namespace Mirakl\MMP\Operator\Request\Order\Accept;

use Mirakl\MMP\Common\Request\Order\Accept\AbstractAcceptOrderRequest;

/**
 * (OR21) Accept or refuse order lines of an order which are in @see AbstractOrderStatus::WAITING_ACCEPTANCE state
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\Order\Accept\AcceptOrderRequest;
 * use Mirakl\MMP\Common\Domain\Order\Accept\AcceptOrderLine;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new AcceptOrderRequest('ORDER_ID', [
 *     new AcceptOrderLine(['id' => 'ORDER_LINE_ID', 'accepted' => true])
 * ]);
 * $api->acceptOrder($request);
 * </code>
 */
class AcceptOrderRequest extends AbstractAcceptOrderRequest
{}