<?php
namespace Mirakl\MMP\Common\Domain\Message\Thread;

use Mirakl\Core\Domain\MiraklObject;

/**
 * @method int          getTotalCount()
 * @method $this        setTotalCount(int $totalCount)
 * @method \DateTime    getLastMessageDate()
 * @method $this        setLastMessageDate(\DateTime $lastMessageDate)
 * @method ThreadSender getLastSender()
 * @method $this        setLastSender(ThreadSender $threadSender)
 * @method \DateTime    getShopReplyNeededSince()
 * @method $this        setShopReplyNeededSince(\DateTime $shopReplyNeededSince)
 */
class ThreadMetadata extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'last_sender' => [ThreadSender::class, 'create'],
    ];
}