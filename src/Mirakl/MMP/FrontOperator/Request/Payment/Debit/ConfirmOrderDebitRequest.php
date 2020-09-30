<?php
namespace Mirakl\MMP\FrontOperator\Request\Payment\Debit;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\FrontOperator\Domain\Collection\Payment\Debit\OrderPaymentCollection;

/**
 * (PA01) Valid / invalid the payment of an order which is in waiting debit payment state
 * @see     AbstractOrderStatus
 *
 * @method  OrderPaymentCollection  getOrderPayments()
 * @method  $this                   setOrderPayments(array|OrderPaymentCollection $orderPayments)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Payment\Debit\ConfirmOrderDebitRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $input = ['orders'][
 * 'amount' => 10,
 * 'customer_id' => 'DFKFSOFK',
 * 'order_id' => 'EOFKSEF',
 * 'payment_status' =>  'OK',
 * 'transaction_date' => '2013-12-12T12:12:00.000+0000',
 * 'transaction_number' => '57574ZEDZER42-QSDQF'
 * ]
 *
 * $request = new ConfirmOrderDebitRequest($input['orders']);
 * $api->confirmOrderDebit($request);
 * </code>
 */
class ConfirmOrderDebitRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/payment/debit';

    /**
     * @var array
     */
    public $bodyParams = ['order_payments' => 'orders'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'order_payments' => [OrderPaymentCollection::class, 'create'],
    ];

    /**
     * @param   array|OrderPaymentCollection    $orderPayments
     */
    public function __construct($orderPayments)
    {
        parent::__construct();
        $this->setOrderPayments($orderPayments);
    }
}