<?php
namespace Mirakl\MMP\FrontOperator\Request\Payment\Refund;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\Core\Response\Decorator;
use Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Refund\RefundOrderCollection;
use Psr\Http\Message\ResponseInterface;

/**
 * (PA12) Lists order refunds where refund state is RefundState::WAITING_REFUND_PAYMENT}
 *
 *  * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Payment\Refund\GetOrderRefundsRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new GetOrderRefundsRequest();
 *
 * $request->setOffset(1)
 *   ->setMax(5);
 *
 * $api->getOrderRefunds($request);
 * </code>
 */
class GetOrderRefundsRequest extends AbstractRequest
{
    use PageableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/payment/refund';

    /**
     * @var array
     */
    protected static $dataTypes = [
        'refunds' => [RefundOrderCollection::class, 'create'],
    ];

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new Decorator\Closure(function (ResponseInterface $response) {
            $data = \Mirakl\parse_json_response($response);
            $collection = new RefundOrderCollection($data['orders']['order'], $data['total_count']);

            return $collection;
        });
    }
}