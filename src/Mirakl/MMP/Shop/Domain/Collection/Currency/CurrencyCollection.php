<?php
namespace Mirakl\MMP\Shop\Domain\Collection\Currency;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Shop\Domain\Currency\Currency;

/**
 * @method Currency current()
 * @method Currency first()
 * @method Currency get($offset)
 * @method Currency offsetGet($offset)
 * @method Currency last()
 */
class CurrencyCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Currency::class;
}