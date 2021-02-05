<?php
namespace Mirakl\MCI\Common\Domain;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MCI\Common\Domain\Collection\ValueListCollection;

/**
 * @method  string              getCode()
 * @method  $this               setCode(string $code)
 * @method  string              getLabel()
 * @method  $this               setLabel(string $label)
 * @method  ValueListCollection getValueLists()
 */
class ValueLists extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'values_lists' => 'value_lists',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'value_lists' => [ValueListCollection::class, 'create'],
    ];
}