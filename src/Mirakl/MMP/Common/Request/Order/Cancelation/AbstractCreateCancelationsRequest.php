<?php
namespace Mirakl\MMP\Common\Request\Order\Cancelation;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Order\CreateCancelationCollection;

/**
 * (OR30) Demand cancelations on order lines
 *
 * @method  CreateCancelationCollection   getCancelations()
 * @method  $this                         setCancelations(array|CreateCancelationCollection $cancelations)
 */
abstract class AbstractCreateCancelationsRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/cancel';

    /**
     * @var array
     */
    public $bodyParams = ['cancelations'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'cancelations' => [CreateCancelationCollection::class, 'create'],
    ];

    /**
     * @param   array|CreateCancelationCollection $cancelations
     */
    public function __construct($cancelations)
    {
        parent::__construct();
        $this->setCancelations($cancelations);
    }
}
