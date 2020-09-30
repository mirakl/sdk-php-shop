<?php
namespace Mirakl\MMP\Operator\Request\Order\Refund;

use Mirakl\MMP\OperatorShop\Domain\Collection\Order\Refund\RefundCreatedCollection;
use Mirakl\MMP\OperatorShop\Request\Order\Refund\AbstractCreateRefundRequest;

/**
 * (OR28) Demand refunds on order lines
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Operator\Client\OperatorApiClient;
 * use Mirakl\MMP\Operator\Request\Order\Refund\CreateRefundRequest;
 *
 * $api = new OperatorApiClient('API_URL', 'API_KEY');
 * $request = new CreateRefundRequest([
 *     'amount' => 10,
 *     'reason_code' => '18',
 *     'order_line_id' => 'MMP-OL-3305999877',
 *     'quantity' => 1,
 *     'shipping_amount' => 1,
 *     'taxes' => [
 *         ['code' => 'TAX_A', 'amount' => 0.12]
 *     ],
 *     'shipping_taxes' => [
 *         ['code' => 'TAX_B', 'amount' => 0.07]
 *     ],
 * ]);
 * $result = $api->refundOrder($request);
 * // $result => @see \Mirakl\MMP\OperatorShop\Domain\Collection\Order\Refund\RefundCreatedCollection
 * </code>
 */
class CreateRefundRequest extends AbstractCreateRefundRequest
{
    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return RefundCreatedCollection::decorator('refunds');
    }
}