<?php
namespace Mirakl\MMP\FrontOperator\Request\Payment\Refund;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Refund\OrderLineRefundCollection;

/**
 * (PA02) Valid / invalid the refund of order lines of orders
 *
 * @method  OrderLineRefundCollection   getRefunds()
 * @method  $this                       setRefunds(array|OrderLineRefundCollection $refunds)
 *
 *  * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Payment\Refund\ConfirmOrderRefundRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $input = ['refunds' => [
 *   'amount' => 255.00,
 *   'refund_id' =>  '1101',
 *   'payment_status' => 'OK',
 *   'transaction_date' => '2013-12-12T12:12:00.000+0000',
 *   'transaction_number' => '49R349IUR34'
 *  ]
 * ]
 *
 * $request = new ConfirmOrderRefundRequest($input['refunds']);
 *
 * $api->confirmOrderRefund($request);
 * </code>
 */
class ConfirmOrderRefundRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/payment/refund';

    /**
     * @var array
     */
    public $bodyParams = ['refunds'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'refunds' => [OrderLineRefundCollection::class, 'create'],
    ];

    /**
     * @param   array|OrderLineRefundCollection $refunds
     */
    public function __construct($refunds)
    {
        parent::__construct();
        $this->setRefunds($refunds);
    }
}