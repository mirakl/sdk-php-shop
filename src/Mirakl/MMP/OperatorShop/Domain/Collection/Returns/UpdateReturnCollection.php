<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Collection\Returns;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\Returns\UpdateReturn;

/**
 * @method UpdateReturn current()
 * @method UpdateReturn first()
 * @method UpdateReturn get($offset)
 * @method UpdateReturn offsetGet($offset)
 * @method UpdateReturn last()
 */
class UpdateReturnCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdateReturn::class;
}
