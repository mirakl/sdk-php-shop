<?php
namespace Mirakl\MCI\Common\Domain\Collection\ProductFeed;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\ProductFeed\Channel;

/**
 * @method Channel current()
 * @method Channel first()
 * @method Channel get($offset)
 * @method Channel offsetGet($offset)
 * @method Channel last()
 */
class ChannelCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Channel::class;
}