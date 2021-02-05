<?php
namespace Mirakl\MCI\Common\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\AttributeRole;

/**
 * @method  AttributeRole   current()
 * @method  AttributeRole   first()
 * @method  AttributeRole   get($offset)
 * @method  AttributeRole   offsetGet($offset)
 * @method  AttributeRole   last()
 */
class AttributeRoleCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AttributeRole::class;
}