<?php
namespace Mirakl\MMP\Front\Domain\Collection\Quote\Get;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Quote\Get\QuoteRequest;

/**
 * @method  QuoteRequest    current()
 * @method  QuoteRequest    first()
 * @method  QuoteRequest    get($offset)
 * @method  QuoteRequest    offsetGet($offset)
 * @method  QuoteRequest    last()
 */
class QuoteRequestCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = QuoteRequest::class;
}