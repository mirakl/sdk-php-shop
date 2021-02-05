<?php
namespace Mirakl\MMP\Common\Domain\Collection\Message\Thread;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Message\Thread\ThreadRecipient;

/**
 * @method  ThreadRecipient current()
 * @method  ThreadRecipient first()
 * @method  ThreadRecipient get($offset)
 * @method  ThreadRecipient offsetGet($offset)
 * @method  ThreadRecipient last()
 */
class ThreadRecipientCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ThreadRecipient::class;
}