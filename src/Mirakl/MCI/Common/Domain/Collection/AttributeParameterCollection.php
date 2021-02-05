<?php
namespace Mirakl\MCI\Common\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\AttributeParameter;

/**
 * @method  AttributeParameter current()
 * @method  AttributeParameter first()
 * @method  AttributeParameter get($offset)
 * @method  AttributeParameter offsetGet($offset)
 * @method  AttributeParameter last()
 */
class AttributeParameterCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = AttributeParameter::class;
}