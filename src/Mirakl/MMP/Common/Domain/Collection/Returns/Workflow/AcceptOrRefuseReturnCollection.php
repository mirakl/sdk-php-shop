<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Returns\Workflow;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Returns\Workflow\AcceptOrRefuseReturn;

/**
 * @method AcceptOrRefuseReturn current()
 * @method AcceptOrRefuseReturn first()
 * @method AcceptOrRefuseReturn get($offset)
 * @method AcceptOrRefuseReturn offsetGet($offset)
 * @method AcceptOrRefuseReturn last()
 */
class AcceptOrRefuseReturnCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AcceptOrRefuseReturn::class;
}
