<?php
namespace Mirakl\MCI\Common\Domain\ProductFeed;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MCI\Common\Domain\Collection\ValueTranslationCollection;

/**
 * @method string                     getCode()
 * @method $this                      setCode(string $code)
 * @method string                     getDescription()
 * @method $this                      setDescription(string $description)
 * @method ValueTranslationCollection getDescriptionTranslations()
 * @method $this                      setDescriptionTranslations(ValueTranslationCollection $descriptionTranslations)
 * @method string                     getLabel()
 * @method $this                      setLabel(string $label)
 * @method ValueTranslationCollection getLabelTranslations()
 * @method $this                      setLabelTranslations(ValueTranslationCollection $labelTranslations)
 * @method string                     getOperation()
 * @method $this                      setOperation(string $operation) One of \Mirakl\MCI\Common\Domain\ProductFeed\ImportProductFeedOperation
 */
class ProductFeedImportItem extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'description_translations' => [ValueTranslationCollection::class, 'create'],
        'label_translations'       => [ValueTranslationCollection::class, 'create'],
    ];
}