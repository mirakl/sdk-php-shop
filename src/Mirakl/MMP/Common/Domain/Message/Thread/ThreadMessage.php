<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Message\Thread;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Message\Thread\ThreadAttachmentCollection;
use Mirakl\MMP\Common\Domain\Collection\Message\Thread\ThreadParticipantCollection;

/**
 * @method string                      getId()
 * @method $this                       setId(string $id)
 * @method ThreadSender                getFrom()
 * @method $this                       setFrom(array|ThreadSender $from)
 * @method ThreadParticipantCollection getTo()
 * @method $this                       setTo(array|ThreadParticipantCollection $to)
 * @method string                      getBody()
 * @method $this                       setBody(string $body)
 * @method \DateTime                   getDateCreated()
 * @method $this                       setDateCreated(\DateTime $dateCreated)
 * @method ThreadAttachmentCollection  getAttachments()
 * @method $this                       setAttachments(array|ThreadAttachmentCollection $attachments)
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
