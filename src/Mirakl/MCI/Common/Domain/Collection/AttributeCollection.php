<?php
namespace Mirakl\MCI\Common\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\Attribute;

/**
 * @method  Attribute   current()
 * @method  Attribute   first()
 * @method  Attribute   get($offset)
 * @method  Attribute   offsetGet($offset)
 * @method  Attribute   last()
 */
class AttributeCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Attribute::class;
}