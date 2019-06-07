<?php
namespace Mirakl\MMP\Common\Domain\Collection\Shipping;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Shipping\LogisticClass;

/**
 * @method  LogisticClass   current()
 * @method  LogisticClass   first()
 * @method  LogisticClass   get($offset)
 * @method  LogisticClass   offsetGet($offset)
 * @method  LogisticClass   last()
 */
class LogisticClassCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = LogisticClass::class;
}