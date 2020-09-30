<?php
namespace Mirakl\MMP\Front\Request\Order\Workflow;

use Mirakl\Core\Request\AbstractRequest;

/**
 * (OR02) Validate a commercial order which is in staging state
 *
 * @see     \Mirakl\MMP\Common\Domain\Order\State\AbstractOrderStatus::STAGING
 *
 * @method  string  getCommercialId()
 * @method  $this   setCommercialId(string $commercialId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\Front\Request\Order\Workflow\ValidateOrderRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new ValidateOrderRequest('COMMERCIAL_ID');
 * $api->validateOrder($request);
 * </code>
 */
class ValidateOrderRequest extends AbstractRequest
{
    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * @var string
     */
    protected $endpoint = '/orders/valid/{commercial_id}';

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