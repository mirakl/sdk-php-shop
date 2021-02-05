<?php
namespace Mirakl\MMP\OperatorShop\Request\Order\Refund;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\OperatorShop\Domain\Collection\Order\Refund\CreateRefundCollection;

/**
 * (OR28) Demand refunds on order lines
 *
 * @method  CreateRefundCollection  getRefunds()
 * @method  $this                   setRefunds(array|CreateRefundCollection $refunds)
 */
abstract class AbstractCreateRefundRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/refund';

    /**
     * @var array
     */
    public $bodyParams = ['refunds'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'refunds' => [CreateRefundCollection::class, 'create'],
    ];

    /**
     * @param   array|CreateRefundCollection    $refunds
     */
    public function __construct($refunds)
    {
        parent::__construct();
        $this->setRefunds($refunds);
    }
}