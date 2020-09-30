<?php
namespace Mirakl\MMP\Front\Domain\Collection\Quote\Get;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Quote\Get\Quote;

/**
 * @method  Quote   current()
 * @method  Quote   first()
 * @method  Quote   get($offset)
 * @method  Quote   offsetGet($offset)
 * @method  Quote   last()
 */
class QuoteCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = Quote::class;
}