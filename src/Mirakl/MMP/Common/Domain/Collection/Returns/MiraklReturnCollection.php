<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Returns;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Returns\MiraklReturn;

/**
 * @method MiraklReturn current()
 * @method MiraklReturn first()
 * @method MiraklReturn get($offset)
 * @method MiraklReturn offsetGet($offset)
 * @method MiraklReturn last()
 */
class MiraklReturnCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = MiraklReturn::class;
}
