<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Returns\Workflow;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Returns\Workflow\MarkReturnLineComplianceCollection;

/**
 * @method string                             getId()
 * @method $this                              setId(string $id)
 * @method MarkReturnLineComplianceCollection getReturnLines()
 * @method $this                              setReturnLines(MarkReturnLineComplianceCollection|array $returnLines)
 */
class MarkReturnCompliance extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'return_lines' => [MarkReturnLineComplianceCollection::class, 'create'],
    ];
}
