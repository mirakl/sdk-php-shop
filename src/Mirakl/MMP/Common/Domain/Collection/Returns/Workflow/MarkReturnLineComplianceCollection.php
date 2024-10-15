<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Returns\Workflow;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Returns\Workflow\MarkReturnLineCompliance;

/**
 * @method MarkReturnLineCompliance current()
 * @method MarkReturnLineCompliance first()
 * @method MarkReturnLineCompliance get($offset)
 * @method MarkReturnLineCompliance offsetGet($offset)
 * @method MarkReturnLineCompliance last()
 */
class MarkReturnLineComplianceCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = MarkReturnLineCompliance::class;
}
