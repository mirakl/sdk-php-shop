<?php
namespace Mirakl\MCI\Common\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\ValueList;

/**
 * @method  ValueList   current()
 * @method  ValueList   first()
 * @method  ValueList   get($offset)
 * @method  ValueList   offsetGet($offset)
 * @method  ValueList   last()
 */
class ValueListCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ValueList::class;
}