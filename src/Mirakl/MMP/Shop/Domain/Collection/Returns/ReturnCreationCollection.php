<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Returns;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Returns\ReturnCreation;

/**
 * @method ReturnCreation current()
 * @method ReturnCreation first()
 * @method ReturnCreation get($offset)
 * @method ReturnCreation offsetGet($offset)
 * @method ReturnCreation last()
 */
class ReturnCreationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ReturnCreation::class;
}
