<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Returns;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Returns\ReturnCreationReturnLine;

/**
 * @method ReturnCreationReturnLine current()
 * @method ReturnCreationReturnLine first()
 * @method ReturnCreationReturnLine get($offset)
 * @method ReturnCreationReturnLine offsetGet($offset)
 * @method ReturnCreationReturnLine last()
 */
class ReturnCreationReturnLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ReturnCreationReturnLine::class;
}
