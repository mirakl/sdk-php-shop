<?php
namespace Mirakl\MMP\Front\Domain\Collection\Quote\Get;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Quote\Get\QuoteLine;

/**
 * @method  QuoteLine  current()
 * @method  QuoteLine  first()
 * @method  QuoteLine  get($offset)
 * @method  QuoteLine  offsetGet($offset)
 * @method  QuoteLine  last()
 */
class QuoteLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = QuoteLine::class;
}