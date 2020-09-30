<?php
namespace Mirakl\MMP\Front\Domain\Order\Evaluation;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Front\Domain\Collection\Order\Evaluation\CreateOrderEvaluationAssessmentCollection
    as AssessmentCollection;

/**
 * @method  AssessmentCollection   getAssessments()
 * @method  $this                  setAssessments(array|AssessmentCollection $assessments)
 * @method  string                 getComment()
 * @method  $this                  setComment(string $comment)
 * @method  int                    getGrade()
 * @method  $this                  setGrade(int $grade)
 * @method  bool                   getVisible()
 * @method  $this                  setVisible(bool $flag)
 * @method  bool                   isVisible()
 */
class CreateOrderEvaluation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'assessments' => [AssessmentCollection::class, 'create'],
    ];
}