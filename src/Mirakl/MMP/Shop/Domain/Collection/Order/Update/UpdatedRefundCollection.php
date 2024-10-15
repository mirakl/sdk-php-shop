<?php

declare(strict_types=1);

namespace Mirakl\MMP\Shop\Domain\Collection\Order\Update;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Order\Update\UpdatedRefund;

/**
 * @method UpdatedRefund current()
 * @method UpdatedRefund first()
 * @method UpdatedRefund get($offset)
 * @method UpdatedRefund offsetGet($offset)
 * @method UpdatedRefund last()
 */
class UpdatedRefundCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = UpdatedRefund::class;
}
