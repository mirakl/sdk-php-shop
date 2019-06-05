<?php
namespace Mirakl\MMP\OperatorShop\Domain\Collection\Order\Refund;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\OperatorShop\Domain\Order\Refund\CreateRefund;

/**
 * @method  CreateRefund    current()
 * @method  CreateRefund    first()
 * @method  CreateRefund    get($offset)
 * @method  CreateRefund    offsetGet($offset)
 * @method  CreateRefund    last()
 */
class CreateRefundCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CreateRefund::class;
}