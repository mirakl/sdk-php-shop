<?php
namespace Mirakl\MMP\Front\Request\Order\Evaluation;

use Mirakl\MMP\Front\Domain\Order\Evaluation\CreateOrderEvaluation;
use Mirakl\MMP\Common\Request\Order\AbstractOrderRequest;

/**
 * (OR52) Post an evaluation on an order
 *
 * @method  CreateOrderEvaluation   getEvaluation()
 * @method  $this                   setEvaluation(array|CreateOrderEvaluation $evaluation)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Order\Evaluation\CreateOrderEvaluationRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new CreateOrderEvaluationRequest('ORDER_ID', [
 *     'comment'     => 'Great service',
 *     'grade'       => 4,
 *     'visible'     => true,
 *     'assessments' => [
 *         'code'     => '999',
 *         'response' => 4,
 *     ],
 * ]);
 * $api->createOrderEvaluation($request);
 * </code>
 */
class CreateOrderEvaluationRequest extends AbstractOrderRequest
{
    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/evaluation';

    /**
     * @var array
     */
    public $bodyParams = ['evaluation'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'evaluation' => [CreateOrderEvaluation::class, 'create'],
    ];

    /**
     * @param   string                      $orderId
     * @param   array|CreateOrderEvaluation $evaluation
     */
    public function __construct($orderId, $evaluation)
    {
        parent::__construct($orderId);
        $this->setEvaluation($evaluation);
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        return $this->getEvaluation()->toArray();
    }
}
