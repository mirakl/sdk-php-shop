<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Returns;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Returns\ReturnLine;

/**
 * @method ReturnLine current()
 * @method ReturnLine first()
 * @method ReturnLine get($offset)
 * @method ReturnLine offsetGet($offset)
 * @method ReturnLine last()
 */
class ReturnLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ReturnLine::class;
}
