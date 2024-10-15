<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\Fee;

/**
 * @method Fee current()
 * @method Fee first()
 * @method Fee get($offset)
 * @method Fee offsetGet($offset)
 * @method Fee last()
 */
class FeeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Fee::class;
}
