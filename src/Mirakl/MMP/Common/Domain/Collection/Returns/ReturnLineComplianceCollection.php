<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Returns;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Returns\ReturnLineCompliance;

/**
 * @method ReturnLineCompliance current()
 * @method ReturnLineCompliance first()
 * @method ReturnLineCompliance get($offset)
 * @method ReturnLineCompliance offsetGet($offset)
 * @method ReturnLineCompliance last()
 */
class ReturnLineComplianceCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ReturnLineCompliance::class;
}
