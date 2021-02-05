<?php
namespace Mirakl\MMP\Common\Domain\Message\Thread;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Message\Thread\ThreadAttachmentCollection;
use Mirakl\MMP\Common\Domain\Collection\Message\Thread\ThreadParticipantCollection;

/**
 * @method  string                      getId()
 * @method  $this                       setId(string $id)
 * @method  ThreadSender                getFrom()
 * @method  $this                       setFrom(ThreadSender|array $from)
 * @method  ThreadParticipantCollection getTo()
 * @method  $this                       setTo(ThreadParticipantCollection|array $to)
 * @method  String                      getBody()
 * @method  $this                       setBody(string $body)
 * @method  \DateTime                   getDateCreated()
 * @method  $this                       setDateCreated(\DateTime $dateCreated)
 * @method  ThreadAttachmentCollection  getAttachments()
 * @method  $this                       setAttachments(ThreadAttachmentCollection|array $attachments)
 */
class ThreadMessage extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'from'        => [ThreadSender::class, 'create'],
        'to'          => [ThreadParticipantCollection::class, 'create'],
        'attachments' => [ThreadAttachmentCollection::class, 'create'],
    ];
}