<?php
namespace Mirakl\MMP\Shop\Request\Order\Evaluation;

use Mirakl\MMP\Common\Request\Order\Evaluation\AbstractGetOrderEvaluationRequest;

/**
 * (OR51) Get the evaluation of an order
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Evaluation\GetOrderEvaluationRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new GetOrderEvaluationRequest('ORDER_ID');
 * $result = $api->getOrderEvaluation($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Evaluation
 * </code>
 */
class GetOrderEvaluationRequest extends AbstractGetOrderEvaluationRequest
{}