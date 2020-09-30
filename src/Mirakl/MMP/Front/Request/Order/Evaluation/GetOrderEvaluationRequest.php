<?php
namespace Mirakl\MMP\Front\Request\Order\Evaluation;

use Mirakl\MMP\Common\Request\Order\Evaluation\AbstractGetOrderEvaluationRequest;

/**
 * (OR51) Get the evaluation of an order
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Order\Evaluation\GetOrderEvaluationRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new GetOrderEvaluationRequest('ORDER_ID');
 * $result = $api->getOrderEvaluation($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Evaluation
 * </code>
 */
class GetOrderEvaluationRequest extends AbstractGetOrderEvaluationRequest
{}