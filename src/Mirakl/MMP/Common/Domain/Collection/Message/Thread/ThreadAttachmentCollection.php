<?php
namespace Mirakl\MMP\Common\Domain\Collection\Message\Thread;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Message\Thread\ThreadAttachment;

/**
 * @method  ThreadAttachment    current()
 * @method  ThreadAttachment    first()
 * @method  ThreadAttachment    get($offset)
 * @method  ThreadAttachment    offsetGet($offset)
 * @method  ThreadAttachment    last()
 */
class ThreadAttachmentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ThreadAttachment::class;
}