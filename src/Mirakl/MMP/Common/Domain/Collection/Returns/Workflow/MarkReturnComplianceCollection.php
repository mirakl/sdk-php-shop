<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Returns\Workflow;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Returns\Workflow\MarkReturnCompliance;

/**
 * @method MarkReturnCompliance current()
 * @method MarkReturnCompliance first()
 * @method MarkReturnCompliance get($offset)
 * @method MarkReturnCompliance offsetGet($offset)
 * @method MarkReturnCompliance last()
 */
class MarkReturnComplianceCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = MarkReturnCompliance::class;
}
