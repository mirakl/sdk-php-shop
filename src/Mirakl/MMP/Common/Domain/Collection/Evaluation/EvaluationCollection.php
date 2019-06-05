<?php
namespace Mirakl\MMP\Common\Domain\Collection\Evaluation;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Evaluation;

/**
 * @method  Evaluation  current()
 * @method  Evaluation  first()
 * @method  Evaluation  get($offset)
 * @method  Evaluation  offsetGet($offset)
 * @method  Evaluation  last()
 */
class EvaluationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Evaluation::class;
}