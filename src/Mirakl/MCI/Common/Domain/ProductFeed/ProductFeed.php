<?php
namespace Mirakl\MCI\Common\Domain\ProductFeed;

use Mirakl\Core\Domain\MiraklObject;
use Mirakl\MCI\Common\Domain\Collection\ProductFeed\ChannelCollection;
use Mirakl\MCI\Common\Domain\Collection\ValueTranslationCollection;

/**
 * @method ChannelCollection          getChannels()
 * @method $this                      setChannels(ChannelCollection $channels)
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
 */
class ProductFeed extends MiraklObject
{
    /**
     * @var array
     */
    protected static $dataTypes = [
        'channels'                 => [ChannelCollection::class, 'create'],
        'description_translations' => [ValueTranslationCollection::class, 'create'],
        'label_translations'       => [ValueTranslationCollection::class, 'create'],
    ];
}