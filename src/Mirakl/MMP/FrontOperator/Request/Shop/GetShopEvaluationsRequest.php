<?php
namespace Mirakl\MMP\FrontOperator\Request\Shop;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\PageableTrait;
use Mirakl\Core\Request\SortableTrait;
use Mirakl\MMP\Common\Request\Shop\AbstractShopRequest;
use Mirakl\MMP\Common\Domain\Collection\Evaluation\EvaluationCollection;

/**
 * (S03) List shop's evaluations.
 * Return only visible evaluations.
 * This API uses pagination by default and will return 10 evaluations
 * Result can be sort with @see GetShopEvaluationsRequest
 *
 * @method  string  getShopId()
 * @method  $this   setShopId(string $shopId)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Shop\GetShopEvaluationsRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 * $request = new GetShopEvaluationsRequest('2008');
 *
 * $result = $api->getShopEvaluations($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Evaluation\EvaluationCollection
 * </code>
 */
class GetShopEvaluationsRequest extends AbstractShopRequest
{
    use LocalizableTrait;
    use PageableTrait;
    use SortableTrait;

    // (DEFAULT) Sort by creation date
    const SORT_BY_DATE  = 'date';

    // Sort by grade
    const SORT_BY_GRADE = 'grade';

    /**
     * @var string
     */
    protected $endpoint = '/shops/{shop}/evaluations';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return EvaluationCollection::decorator('evaluations');
    }
}