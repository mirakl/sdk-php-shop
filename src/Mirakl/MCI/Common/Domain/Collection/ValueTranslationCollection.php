<?php
namespace Mirakl\MCI\Common\Domain\Collection;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MCI\Common\Domain\ValueTranslation;

/**
 * @method  ValueTranslation    current()
 * @method  ValueTranslation    first()
 * @method  ValueTranslation    get($offset)
 * @method  ValueTranslation    offsetGet($offset)
 * @method  ValueTranslation    last()
 */
class ValueTranslationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ValueTranslation::class;
}