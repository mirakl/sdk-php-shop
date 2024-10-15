<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Order\Fee;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\Fee\OrderLineFee;

/**
 * @method OrderLineFee current()
 * @method OrderLineFee first()
 * @method OrderLineFee get($offset)
 * @method OrderLineFee offsetGet($offset)
 * @method OrderLineFee last()
 */
class OrderLineFeeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderLineFee::class;
}
