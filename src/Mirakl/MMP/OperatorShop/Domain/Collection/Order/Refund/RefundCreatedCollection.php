<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\Order\Refund;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\Order\Refund\RefundCreated;

/**
 * @method  RefundCreated   current()
 * @method  RefundCreated   first()
 * @method  RefundCreated   get($offset)
 * @method  RefundCreated   offsetGet($offset)
 * @method  RefundCreated   last()
 */
class RefundCreatedCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = RefundCreated::class;
}