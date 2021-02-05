<?php
namespace Mirakl\MMP\Common\Domain\Evaluation;

use Mirakl\MMP\Common\Domain\Evaluation;

/**
 * @method  EvaluationEntity    getEntity()
 * @method  $this               setEntity(EvaluationEntity $entity)
 */
class ShopEvaluation extends Evaluation
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'entity' => [EvaluationEntity::class, 'create'],
    ];
}