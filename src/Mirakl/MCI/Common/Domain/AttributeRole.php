<?php
namespace Mirakl\MCI\Common\Domain;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MCI\Common\Domain\Collection\AttributeRoleParameterCollection;

/**
 * @method  AttributeRoleParameterCollection    getParameters()
 * @method  $this                               setParameters(AttributeRoleParameterCollection $parameters)
 * @method  string                              getType()
 * @method  $this                               setType(string $type)
 */
class AttributeRole extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'parameters' => [AttributeRoleParameterCollection::class, 'create'],
    ];
}