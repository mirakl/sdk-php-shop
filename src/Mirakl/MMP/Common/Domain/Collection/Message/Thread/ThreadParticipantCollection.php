<?php
namespace Mirakl\MMP\Common\Domain\Collection\Message\Thread;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Message\Thread\ThreadParticipant;

/**
 * @method  ThreadParticipant   current()
 * @method  ThreadParticipant   first()
 * @method  ThreadParticipant   get($offset)
 * @method  ThreadParticipant   offsetGet($offset)
 * @method  ThreadParticipant   last()
 */
class ThreadParticipantCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ThreadParticipant::class;
}