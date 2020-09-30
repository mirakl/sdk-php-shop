<?php
namespace Mirakl\MMP\Front\Request\Order\Workflow;

use Mirakl\Core\Request\AbstractRequest;

/**
 * (OR03) Invalidate a commercial order which is in staging state
 *
 * @see     AbstractOrderStatus
 *
 * @method  string  getCommercialId()
 * @method  $this   setCommercialId(string $commercialId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Order\Workflow\InvalidateOrderRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new InvalidateOrderRequest('COMMERCIAL_ID');
 * $api->invalidateOrder($request);
 * </code>
 */
class InvalidateOrderRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/invalid/{commercial_id}';

    /**
     * @var array
     */
    protected $uriVars = [
        '{commercial_id}' => 'commercial_id'
    ];

    /**
     * @param   string  $commercialId
     */
    public function __construct($commercialId)
    {
        parent::__construct();
        $this->setCommercialId($commercialId);
    }
}