<?php
namespace Mirakl\MMP\Front\Domain\Collection\Order\Evaluation;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Order\Evaluation\CreateOrderEvaluationAssessment;

/**
 * @method  CreateOrderEvaluationAssessment current()
 * @method  CreateOrderEvaluationAssessment first()
 * @method  CreateOrderEvaluationAssessment get($offset)
 * @method  CreateOrderEvaluationAssessment offsetGet($offset)
 * @method  CreateOrderEvaluationAssessment last()
 */
class CreateOrderEvaluationAssessmentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CreateOrderEvaluationAssessment::class;

    /**
     * @inheritdoc
     */
    public function newItem(array $item)
    {
        return CreateOrderEvaluationAssessment::create($item);
    }
}