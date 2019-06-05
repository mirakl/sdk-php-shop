<?php
namespace Mirakl\MMP\Common\Domain\Collection\Locale;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Common\Domain\Locale;

/**
 * @method  Locale  current()
 * @method  Locale  first()
 * @method  Locale  get($offset)
 * @method  Locale  offsetGet($offset)
 * @method  Locale  last()
 */
class LocaleCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Locale::class;
}