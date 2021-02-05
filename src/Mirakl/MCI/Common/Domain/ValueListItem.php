<?php
namespace Mirakl\MCI\Common\Domain;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MCI\Common\Domain\Collection\ValueTranslationCollection;

/**
 * @method  string                      getCode()
 * @method  $this                       setCode(string $code)
 * @method  string                      getLabel()
 * @method  $this                       setLabel(string $label)
 * @method  ValueTranslationCollection  getLabelTranslations()
 */
class ValueListItem extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'label_translations' => [ValueTranslationCollection::class, 'create'],
    ];
}