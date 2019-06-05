<?php
namespace Mirakl\MCI\Common\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\AttributeRoleParameter;

/**
 * @method  AttributeRoleParameter   current()
 * @method  AttributeRoleParameter   first()
 * @method  AttributeRoleParameter   get($offset)
 * @method  AttributeRoleParameter   offsetGet($offset)
 * @method  AttributeRoleParameter   last()
 */
class AttributeRoleParameterCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AttributeRoleParameter::class;
}