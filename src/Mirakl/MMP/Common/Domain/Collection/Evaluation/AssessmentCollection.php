<?php
namespace Mirakl\MMP\Common\Domain\Collection\Evaluation;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Evaluation\Assessment;

/**
 * @method  Assessment  current()
 * @method  Assessment  first()
 * @method  Assessment  get($offset)
 * @method  Assessment  offsetGet($offset)
 * @method  Assessment  last()
 */
class AssessmentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Assessment::class;
}