<?php
namespace Mirakl\MMP\FrontOperator\Request\Reason;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\FrontOperator\Domain\Collection\Reason\ReasonCollection;

/**
 * (RE01) Get all reasons configured on the platform
 * Used for incident opening, refunds...
 * @see \Mirakl\MMP\Common\Domain\Reason\ReasonType
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Common\Domain\Reason\ReasonType;
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Reason\GetReasonsRequest;
 *
 * $request = new GetReasonsRequest();
 * $result = $api->getReasons($request);
 * // $result => @see \Mirakl\MMP\FrontOperator\Domain\Collection\Reason\ReasonCollection
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