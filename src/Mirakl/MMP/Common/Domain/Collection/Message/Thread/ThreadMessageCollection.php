<?php
namespace Mirakl\MMP\Common\Domain\Collection\Message\Thread;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Message\Thread\ThreadMessage;

/**
 * @method  ThreadMessage   current()
 * @method  ThreadMessage   first()
 * @method  ThreadMessage   get($offset)
 * @method  ThreadMessage   offsetGet($offset)
 * @method  ThreadMessage   last()
 */
class ThreadMessageCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ThreadMessage::class;
}