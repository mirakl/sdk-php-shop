<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Order\Cancelation\CancelationCreated;

/**
 * @method CancelationCreated current()
 * @method CancelationCreated first()
 * @method CancelationCreated get($offset)
 * @method CancelationCreated offsetGet($offset)
 * @method CancelationCreated last()
 */
class CancelationCreatedCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CancelationCreated::class;
}
