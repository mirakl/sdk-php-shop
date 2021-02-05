<?php
namespace Mirakl\MMP\Common\Domain\Collection\Channel;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Channel\Channel;

/**
 * @method  Channel current()
 * @method  Channel first()
 * @method  Channel get($offset)
 * @method  Channel offsetGet($offset)
 * @method  Channel last()
 */
class ChannelCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Channel::class;
}