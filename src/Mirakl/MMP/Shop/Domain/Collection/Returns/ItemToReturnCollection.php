<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Returns;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Returns\ItemToReturn;

/**
 * @method ItemToReturn current()
 * @method ItemToReturn first()
 * @method ItemToReturn get($offset)
 * @method ItemToReturn offsetGet($offset)
 * @method ItemToReturn last()
 */
class ItemToReturnCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ItemToReturn::class;
}
