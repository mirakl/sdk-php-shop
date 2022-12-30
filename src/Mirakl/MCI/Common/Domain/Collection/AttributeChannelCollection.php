<?php
namespace Mirakl\MCI\Common\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\AttributeChannel;

/**
 * @method  AttributeChannel   current()
 * @method  AttributeChannel   first()
 * @method  AttributeChannel   get($offset)
 * @method  AttributeChannel   offsetGet($offset)
 * @method  AttributeChannel   last()
 */
class AttributeChannelCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AttributeChannel::class;
}