<?php

declare(strict_types=1);

namespace Mirakl\MMP\OperatorShop\Domain\Collection\Returns;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\Returns\ReturnUpdateError;

/**
 * @method ReturnUpdateError current()
 * @method ReturnUpdateError first()
 * @method ReturnUpdateError get($offset)
 * @method ReturnUpdateError offsetGet($offset)
 * @method ReturnUpdateError last()
 */
class ReturnUpdateErrorCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ReturnUpdateError::class;
}
