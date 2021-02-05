<?php
namespace Mirakl\MMP\Common\Domain;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Evaluation\AssessmentCollection;

/**
 * @method  AssessmentCollection    getAssessments()
 * @method  $this                   setAssessments(array|AssessmentCollection $assessments)
 * @method  string                  getCustomerId()
 * @method  $this                   setCustomerId(string $id)
 * @method  string                  getComment()
 * @method  $this                   setComment(string $comment)
 * @method  \DateTime               getDate()
 * @method  $this                   setDate(\DateTime $date)
 * @method  string                  getFirstname()
 * @method  $this                   setFirstname(string $firstname)
 * @method  int                     getGrade()
 * @method  $this                   setGrade(int $grade)
 * @method  string                  getLastname()
 * @method  $this                   setLastname(string $lastname)
 * @method  \DateTime               getLastUpdatedDate()
 * @method  $this                   setLastUpdatedDate(\DateTime $lastUpdatedDate)
 * @method  bool                    getVisible()
 * @method  $this                   setVisible(bool $visible)
 * @method  bool                    isVisible()
 */
class Evaluation extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'assessments' => [AssessmentCollection::class, 'create'],
    ];
}