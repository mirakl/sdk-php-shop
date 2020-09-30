<?php
namespace Mirakl\MMP\FrontOperator\Request\Payment\Debit;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\Core\Response\Decorator;
use Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Debit\DebitOrderCollection;
use Psr\Http\Message\ResponseInterface;

/**
 * (PA11) List order debits in both PAY_ON_ACCEPTANCE and WAITING_DEBIT_PAYMENT workflow state
 *
 *  * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Payment\Debit\GetOrderDebitsRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new GetOrderDebitsRequest();
 *
 * $request->setOffset(1)
 *   ->setMax(5);
 *
 * $api->getOrderDebits($request);
 * </code>
 */
class GetOrderDebitsRequest extends AbstractRequest
{
    use PageableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/payment/debit';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return new Decorator\Closure(function (ResponseInterface $response) {
            $data = \Mirakl\parse_json_response($response);
            $collection = new DebitOrderCollection($data['orders']['order'], $data['total_count']);

            return $collection;
        });
    }
}