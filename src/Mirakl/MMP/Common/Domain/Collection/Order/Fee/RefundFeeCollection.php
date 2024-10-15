<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Collection\Order\Fee;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\Fee\RefundFee;

/**
 * @method RefundFee current()
 * @method RefundFee first()
 * @method RefundFee get($offset)
 * @method RefundFee offsetGet($offset)
 * @method RefundFee last()
 */
class RefundFeeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = RefundFee::class;
}
