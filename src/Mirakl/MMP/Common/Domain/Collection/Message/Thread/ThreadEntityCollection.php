<?php
namespace Mirakl\MMP\Common\Domain\Collection\Message\Thread;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Message\Thread\ThreadEntity;

/**
 * @method  ThreadEntity    current()
 * @method  ThreadEntity    first()
 * @method  ThreadEntity    get($offset)
 * @method  ThreadEntity    offsetGet($offset)
 * @method  ThreadEntity    last()
 */
class ThreadEntityCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ThreadEntity::class;
}