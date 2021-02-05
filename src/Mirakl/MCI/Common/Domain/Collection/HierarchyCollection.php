<?php
namespace Mirakl\MCI\Common\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\Hierarchy;

/**
 * @method  Hierarchy   current()
 * @method  Hierarchy   first()
 * @method  Hierarchy   get($offset)
 * @method  Hierarchy   offsetGet($offset)
 * @method  Hierarchy   last()
 */
class HierarchyCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Hierarchy::class;
}