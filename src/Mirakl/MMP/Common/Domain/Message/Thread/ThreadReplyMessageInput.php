<?php
namespace Mirakl\MMP\Common\Domain\Message\Thread;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Message\Thread\ThreadRecipientCollection;

/**
 * @method  string                      getBody()
 * @method  $this                       setBody(string $body)
 * @method  ThreadRecipientCollection   getTo()
 * @method  $this                       setTo(ThreadRecipientCollection|array $to)
 * @method  ThreadTopic                 getTopic()
 * @method  $this                       setTopic(ThreadTopic $topic)
 */
class ThreadReplyMessageInput extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'to'    => [ThreadRecipientCollection::class, 'create'],
        'topic' => [ThreadTopic::class, 'create'],
    ];
}
