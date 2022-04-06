<?php
namespace Mirakl\MMP\Shop\Request\Reason;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Shop\Domain\Collection\Reason\ReasonCollection;

/**
 * (RE01) Get all reasons configured on the platform
 * Used for incident opening, refunds...
 * @see \Mirakl\MMP\Common\Domain\Reason\ReasonType
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Shop\Client\ShopApiClient;
 * use Mirakl\MMP\Shop\Request\Reason\GetReasonsRequest;
 *
 * $api = new ShopApiClient('API_URL', 'API_KEY', 'SHOP_ID');
 *
 * $request = new GetReasonsRequest();
 * $result = $api->getReasons($request);
 * // $result => @see \Mirakl\MMP\Shop\Domain\Collection\Reason\ReasonCollection
 * </code>
 */
class GetReasonsRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/reasons';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return ReasonCollection::decorator('reasons');
    }
}