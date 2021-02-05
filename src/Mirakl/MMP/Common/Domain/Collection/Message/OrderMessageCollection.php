<?php
namespace Mirakl\MMP\Common\Domain\Collection\Message;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Message\OrderMessage;

/**
 * @method  OrderMessage    current()
 * @method  OrderMessage    first()
 * @method  OrderMessage    get($offset)
 * @method  OrderMessage    offsetGet($offset)
 * @method  OrderMessage    last()
 */
class OrderMessageCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = OrderMessage::class;
}