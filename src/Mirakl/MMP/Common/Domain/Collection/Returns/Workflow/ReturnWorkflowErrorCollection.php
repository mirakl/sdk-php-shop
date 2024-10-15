<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Returns\Workflow;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Returns\Workflow\ReturnWorkflowError;

/**
 * @method ReturnWorkflowError current()
 * @method ReturnWorkflowError first()
 * @method ReturnWorkflowError get($offset)
 * @method ReturnWorkflowError offsetGet($offset)
 * @method ReturnWorkflowError last()
 */
class ReturnWorkflowErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ReturnWorkflowError::class;
}
