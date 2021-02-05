<?php
namespace Mirakl\MMP\Shop\Request\Reason;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Reason\ReasonType;
use Mirakl\MMP\Shop\Domain\Collection\Reason\ReasonCollection;

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
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Reason\GetTypeReasonsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new GetTypeReasonsRequest();
 *
 * $result = $api->getTypeReasons($request);
 * // $result => @see \Mirakl\MMP\Shop\Domain\Collection\Reason\ReasonCollection
 * </code>
 */
class GetTypeReasonsRequest extends AbstractRequest
{
    use LocalizableTrait;

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

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ReasonCollection::decorator('reasons');
    }
}