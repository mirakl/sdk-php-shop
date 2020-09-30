<?php
namespace Mirakl\MMP\FrontOperator\Request\Order\Evaluation;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Request\AbstractRequest;
use Mirakl\MMP\Common\Domain\Collection\Evaluation\AssessmentCollection;

/**
 * (EV01) Get the evaluation criterias used to evaluate an order
 * (sorted by sortIndex, defined in the BO)
 *
 * Example:
 *
 * <code>
 * use Mirakl\MMP\Common\Domain\Evaluation\AssessmentType;
 * use Mirakl\MMP\Front\Client\FrontApiClient;
 * use Mirakl\MMP\FrontOperator\Request\Order\Evaluation\GetAssessmentsRequest;
 *
 * $api = new FrontApiClient('API_URL', 'API_KEY');
 *
 * $request = new GetAssessmentsRequest();
 * $request->setLocale('en_US');
 *
 * $result = $api->getAssessments($request);
 * // $result => @see \Mirakl\MMP\Common\Domain\Collection\Evaluation\AssessmentCollection
 * </code>
 */
class GetAssessmentsRequest extends AbstractRequest
{
    use LocalizableTrait;

    /**
     * @var string
     */
    protected $endpoint = '/evaluations/assessments';

    /**
     * @inheritdoc
     */
    public function getResponseDecorator()
    {
        return AssessmentCollection::decorator('assessments');
    }
}