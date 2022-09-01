<?php
namespace Mirakl\MMP\Common\Domain\Collection\Message\Thread;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Message\Thread\ThreadNoStoreReplyNeeded;

/**
 * @method  ThreadNoStoreReplyNeeded  current()
 * @method  ThreadNoStoreReplyNeeded  first()
 * @method  ThreadNoStoreReplyNeeded  get($offset)
 * @method  ThreadNoStoreReplyNeeded  offsetGet($offset)
 * @method  ThreadNoStoreReplyNeeded  last()
 */
class ThreadNoStoreReplyNeededCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ThreadNoStoreReplyNeeded::class;
}