<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Returns;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Returns\ReturnCreationError;

/**
 * @method ReturnCreationError current()
 * @method ReturnCreationError first()
 * @method ReturnCreationError get($offset)
 * @method ReturnCreationError offsetGet($offset)
 * @method ReturnCreationError last()
 */
class ReturnCreationErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ReturnCreationError::class;
}
