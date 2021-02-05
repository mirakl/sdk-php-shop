<?php
namespace Mirakl\MMP\Common\Domain\Collection\Evaluation;

use Mirakl\MMP\Common\Domain\Evaluation\ShopEvaluation;

/**
 * @method  ShopEvaluation  current()
 * @method  ShopEvaluation  first()
 * @method  ShopEvaluation  get($offset)
 * @method  ShopEvaluation  offsetGet($offset)
 * @method  ShopEvaluation  last()
 */
class ShopEvaluationCollection extends EvaluationCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShopEvaluation::class;
}