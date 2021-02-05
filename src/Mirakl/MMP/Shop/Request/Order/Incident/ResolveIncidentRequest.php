<?php
namespace Mirakl\MMP\Shop\Request\Order\Incident;

use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Shop\Domain\Order\Incident\IncidentReason;

/**
 * (OR64) Mark an incident as resolved
 *
 * @method  IncidentReason  getIncidentReason()
 * @method  $this           setIncidentReason(array|IncidentReason $incidentReason)
 * @method  string          getOrderId()
 * @method  $this           setOrderId(string $orderId)
 * @method  string          getOrderLineId()
 * @method  $this           setOrderLineId(string $orderId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Order\Incident\ResolveIncidentRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 * $request = new ResolveIncidentRequest('ORDER_ID', 'LINE', 'REASON_CODE');
 * $api->markIncidentAsResolved($request);
 * </code>
 */
class ResolveIncidentRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/{order}/lines/{line}/resolve_incident';

    /**
     * @var array
     */
    protected $uriVars = [
        '{order}' => 'order_id',
        '{line}' => 'order_line_id',
    ];

    /**
     * @var array
     */
    public $bodyParams = ['incident_reason'];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'incident_reason' => [IncidentReason::class, 'create'],
    ];

    /**
     * @param   string  $orderId
     * @param   String  $orderLineId
     * @param   String  $reasonCode
     */
    public function __construct($orderId, $orderLineId, $reasonCode)
    {
        parent::__construct();
        $this->setOrderId($orderId);
        $this->setOrderLineId($orderLineId);
        $this->setIncidentReason(['reason_code' => $reasonCode]);
    }

    /**
     * @inheritdoc
     */
    public function getBodyParams()
    {
        return $this->getIncidentReason()->toArray();
    }
}