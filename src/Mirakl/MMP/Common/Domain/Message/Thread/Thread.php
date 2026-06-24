<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Message\Thread;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MMP\Common\Domain\Collection\Message\Thread\ThreadEntityCollection;
use Mirakl\MMP\Common\Domain\Collection\Message\Thread\ThreadMessageCollection;
use Mirakl\MMP\Common\Domain\Collection\Message\Thread\ThreadNoStoreReplyNeededCollection;
use Mirakl\MMP\Common\Domain\Collection\Message\Thread\ThreadParticipantCollection;

/**
 * @method ThreadParticipantCollection        getAuthorizedParticipants()
 * @method $this                              setAuthorizedParticipants(array|ThreadParticipantCollection $authorizedParticipants)
 * @method ThreadParticipantCollection        getCurrentParticipants()
 * @method $this                              setCurrentParticipants(array|ThreadParticipantCollection $currentParticipants)
 * @method ThreadCustomerOrganization         getCustomerOrganization()
 * @method $this                              setCustomerOrganization(array|ThreadCustomerOrganization $customerOrganization)
 * @method \DateTime                          getDateCreated()
 * @method $this                              setDateCreated(\DateTime $dateCreated)
 * @method \DateTime                          getDateUpdated()
 * @method $this                              setDateUpdated(\DateTime $dateUpdated)
 * @method ThreadEntityCollection             getEntities()
 * @method $this                              setEntities(array|ThreadEntityCollection $entities)
 * @method string                             getId()
 * @method $this                              setId(string $id)
 * @method ThreadMetadata                     getMetadata()
 * @method $this                              setMetadata(array|ThreadMetadata $metadata)
 * @method ThreadNoStoreReplyNeededCollection getNoStoreReplyNeeded()
 * @method $this                              setNoStoreReplyNeeded(ThreadNoStoreReplyNeededCollection $noStoreReplyNeededCollection)
 * @method ThreadTopic                        getTopic()
 * @method $this                              setTopic(array|ThreadTopic $topic)
 * @method ThreadMessageCollection            getMessages()
 * @method $this                              setMessages(ThreadMessageCollection $messages)
 */
class Thread extends MiraklObject
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
        'customer_organization'   => [ThreadCustomerOrganization::class, 'create'],
        'no_store_reply_needed'   => [ThreadNoStoreReplyNeededCollection::class, 'create'],
        'messages'                => [ThreadMessageCollection::class, 'create'],
    ];
}
