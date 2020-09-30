<?php
namespace Mirakl\MMP\Front\Domain\Collection\Quote\Order;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Quote\Order\QuoteOrderLine;

/**
 * @method  QuoteOrderLine  current()
 * @method  QuoteOrderLine  first()
 * @method  QuoteOrderLine  get($offset)
 * @method  QuoteOrderLine  offsetGet($offset)
 * @method  QuoteOrderLine  last()
 */
class QuoteOrderLineCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = QuoteOrderLine::class;
}