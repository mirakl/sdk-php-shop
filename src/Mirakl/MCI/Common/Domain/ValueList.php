<?php
namespace Mirakl\MCI\Common\Domain;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MCI\Common\Domain\Collection\ValueListItemCollection;
use Mirakl\MCI\Common\Domain\Collection\ValueTranslationCollection;

/**
 * @method  string                      getCode()
 * @method  $this                       setCode(string $code)
 * @method  ValueListItemCollection     getItems()
 * @method  string                      getLabel()
 * @method  $this                       setLabel(string $label)
 * @method  ValueTranslationCollection  getLabelTranslations()
 */
class ValueList extends MiraklObject
{
    /**
     * @var array
     */
    protected static $mapping = [
        'values' => 'items',
    ];

    /**
     * @var array
     */
    protected static $dataTypes = [
        'items' => [ValueListItemCollection::class, 'create'],
        'label_translations' => [ValueTranslationCollection::class, 'create'],
    ];
}