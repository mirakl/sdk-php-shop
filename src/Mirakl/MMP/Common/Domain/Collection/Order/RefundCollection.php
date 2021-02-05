<?php
namespace Mirakl\MMP\Common\Domain\Collection\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Order\Refund;

/**
 * @method  Refund  current()
 * @method  Refund  first()
 * @method  Refund  get($offset)
 * @method  Refund  offsetGet($offset)
 * @method  Refund  last()
 */
class RefundCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Refund::class;
}