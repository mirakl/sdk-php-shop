<?php
namespace Mirakl\MCI\Common\Domain;

use Mirakl\Core\Domain\LocalizableTrait;
use Mirakl\Core\Domain\MiraklObject;

/**
 * @method  string  getValue()
 * @method  $this   setValue(string $value)
 */
class ValueTranslation extends MiraklObject
{
    use LocalizableTrait;
}