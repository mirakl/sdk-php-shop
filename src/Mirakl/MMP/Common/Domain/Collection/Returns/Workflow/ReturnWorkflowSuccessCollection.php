<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Returns\Workflow;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Returns\Workflow\ReturnWorkflowSuccess;

/**
 * @method ReturnWorkflowSuccess current()
 * @method ReturnWorkflowSuccess first()
 * @method ReturnWorkflowSuccess get($offset)
 * @method ReturnWorkflowSuccess offsetGet($offset)
 * @method ReturnWorkflowSuccess last()
 */
class ReturnWorkflowSuccessCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ReturnWorkflowSuccess::class;
}
