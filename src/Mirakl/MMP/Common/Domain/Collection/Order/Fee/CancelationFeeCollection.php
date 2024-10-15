<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Order\Fee;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\Fee\CancelationFee;

/**
 * @method CancelationFee current()
 * @method CancelationFee first()
 * @method CancelationFee get($offset)
 * @method CancelationFee offsetGet($offset)
 * @method CancelationFee last()
 */
class CancelationFeeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CancelationFee::class;
}
