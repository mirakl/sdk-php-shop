<?php
namespace Mirakl\MMP\Front\Request\Order\Workflow;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Front\Domain\Order\Create\CreatedOrders;
use Mirakl\MMP\Front\Domain\Order\Create\CreateOrder;

/**
 * (OR01) Create logistic orders from a commercial order
 *
 * @method  CreateOrder getCreateOrder()
 * @method  $this       setCreateOrder(array|CreateOrder $createOrder)
 * @method  string      getPaymentWorkflow()
 * @method  $this       setPaymentWorkflow(string $paymentWorkflow)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Order\Workflow\CreateOrderRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new CreateOrderRequest('ORDER_ID', [
 *     'commercial_id' => 'MMP-O-3366329727',
 *     'customer' => [
 *         'civility' => 'Dr.',
 *         'firstname' => 'Dionisi',
 *         'lastname' => 'Nelson',
 *         'billing_address' => [
 *             'civility' => 'Dr.',
 *             'firstname' => 'Nelson',
 *             'lastname' => 'Dionisi',
 *             'zip_code' => '75116',
 *             'city' => 'Paris',
 *             'country' => 'France',
 *             'country_iso_code' => 'USA',
 *             'company' => 'Mirakl',
 *             'state' => 'IDF',
 *             'phone' => '0619874662',
 *             'phone_secondary' => '0123456789',
 *             'street_1' => '10-12 rue de l\'Amiral Hamelin',
 *             'street_2' => 'Escalier A',
 *         ],
 *         'email' => 'change-me+ndionisi@mirakl.com',
 *         'shipping_address' => [
 *             'civility' => 'Dr.',
 *             'firstname' => 'Nelson',
 *             'lastname' => 'Dionisi',
 *             'zip_code' => '75116',
 *             'city' => 'Paris',
 *             'country' => 'France',
 *             'country_iso_code' => 'ITA',
 *             'company' => 'Mirakl',
 *             'state' => 'IDF',
 *             'phone' => '0619874662',
 *             'phone_secondary' => '0123456789',
 *             'additional_info' => 'Code : 38JD31',
 *             'internal_additional_info' => '1ier étage',
 *             'street_1' => '10-12 rue de l\'Amiral Hamelin',
 *             'street_2' => 'Escalier A',
 *         ],
 *         'customer_id' => '34053485',
 *     ],
 *     'offers' => [
 *         [
 *             'quantity' => 2,
 *             'price' => 240.00,
 *             'shipping_price' => 15.00,
 *             'shipping_type_code' => 'STD',
 *             'order_line_id' => 'MMP-OL-3366329727',
 *             'order_line_additional_fields' => ['code' => 'custom-message', 'value' => 'For Mommy']],
 *             'offer_id' => '2000',
 *             'offer_price' => 120.00,
 *             'taxes' => [['amount' => 5.00, 'code' => 'TAX1']],
 *             'shipping_taxes' => [['amount' => 1.00, 'code' => 'TAX2']],
 *         ]
 *     ],
 *     'payment_info' => {
 *         'payment_type' => 'Credit Card',
 *         'imprint_number' => 'xxxxx-xxx-x-x-xxxxx'
 *     },
 *     'scored' => true,
 *     'shipping_zone_code' => 'FR',
 * ]);
 * $result = $api->createOrder($request);
 * // $result => @see \Mirakl\MMP\Front\Domain\Order\Create\CreatedOrders
 * </code>
 */
class CreateOrderRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/orders';

    /**
     * @var array
     */
    public $bodyParams = ['create_order'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'create_order' => [CreateOrder::class, 'create'],
    ];

    /**
     * @param   mixed   $order
     */
    public function __construct($order)
    {
        parent::__construct();
        $this->setCreateOrder($order);
    }

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return CreatedOrders::decorator();
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        return $this->getCreateOrder()->toArray();
    }
}