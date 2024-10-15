<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Returns;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Returns\Workflow\ReturnWorkflowErrorCollection;
use Mirakl\MMP\Common\Domain\Collection\Returns\Workflow\ReturnWorkflowSuccessCollection;

/**
 * @method ReturnWorkflowSuccessCollection getReturnSuccess()
 * @method $this                           setReturnSuccess(ReturnWorkflowSuccessCollection|array $returnSuccess)
 * @method ReturnWorkflowErrorCollection   getReturnErrors()
 * @method $this                           setReturnErrors(ReturnWorkflowErrorCollection|array $returnErrors)
 */
abstract class AbstractReturnAcceptOrRefuseResponse extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'return_success' => [ReturnWorkflowSuccessCollection::class, 'create'],
        'return_errors'  => [ReturnWorkflowErrorCollection::class, 'create'],
    ];
}
