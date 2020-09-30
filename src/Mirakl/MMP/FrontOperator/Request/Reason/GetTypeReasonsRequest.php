<?php
namespace Mirakl\MMP\FrontOperator\Request\Reason;

use Mirakl\MMP\Common\Domain\Reason\ReasonType;

/**
 * (RE02) Get reasons by type configured on the platform
 * Used for incident opening, refunds...
 *
 * @method string getReasonType()
 * @method $this  setReasonType(string $reasonType)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Reason\GetTypeReasonsRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new GetTypeReasonsRequest();
 *
 * $result = $api->getTypeReasons($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Collection\Reason\ReasonCollection
 * </code>
 */
class GetTypeReasonsRequest extends GetReasonsRequest
{
    /**
     * @var string
     */
    protected $endpoint = '/reasons/{reason_type}';

    /**
     * @var array
     */
    protected $uriVars = [
        '{reason_type}' => 'reason_type',
    ];

    /**
     * @param   string  $reasonType
     */
    public function __construct($reasonType = ReasonType::INCIDENT_OPEN)
    {
        parent::__construct();
        $this->setReasonType($reasonType);
    }
}