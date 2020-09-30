<?php
namespace Mirakl\MMP\Common\Domain\Message\Thread;

use Mirakl\MMP\Common\Domain\Collection\Message\Thread\ThreadEntityCollection;
use Mirakl\MMP\Common\Domain\Collection\Message\Thread\ThreadMessageCollection;
use Mirakl\MMP\Common\Domain\Collection\Message\Thread\ThreadParticipantCollection;

/**
 * @method  ThreadMessageCollection getMessages()
 * @method  $this                   setMessages(ThreadMessageCollection|array $messages)
 */
class ThreadDetails extends Thread
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'topic'                   => [ThreadTopic::class, 'create'],
        'authorized_participants' => [ThreadParticipantCollection::class, 'create'],
        'current_participants'    => [ThreadParticipantCollection::class, 'create'],
        'entities'                => [ThreadEntityCollection::class, 'create'],
        'metadata'                => [ThreadMetadata::class, 'create'],
        'messages'                => [ThreadMessageCollection::class, 'create'],
    ];
}