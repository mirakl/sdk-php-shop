<?php
namespace Mirakl\MCI\Common\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\ValueListItem;

/**
 * @method  ValueListItem   current()
 * @method  ValueListItem   first()
 * @method  ValueListItem   get($offset)
 * @method  ValueListItem   offsetGet($offset)
 * @method  ValueListItem   last()
 */
class ValueListItemCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ValueListItem::class;
}