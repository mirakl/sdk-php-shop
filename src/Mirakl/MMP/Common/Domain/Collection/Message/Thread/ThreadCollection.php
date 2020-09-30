<?php
namespace Mirakl\MMP\Common\Domain\Collection\Message\Thread;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Message\Thread\Thread;

/**
 * @method  Thread  current()
 * @method  Thread  first()
 * @method  Thread  get($offset)
 * @method  Thread  offsetGet($offset)
 * @method  Thread  last()
 */
class ThreadCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Thread::class;
}