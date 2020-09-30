<?php
namespace Mirakl\MMP\Front\Domain\Collection\Quote\Get;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Quote\Get\ShopQuoteRequest;

/**
 * @method  ShopQuoteRequest    current()
 * @method  ShopQuoteRequest    first()
 * @method  ShopQuoteRequest    get($offset)
 * @method  ShopQuoteRequest    offsetGet($offset)
 * @method  ShopQuoteRequest    last()
 */
class ShopQuoteRequestCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShopQuoteRequest::class;
}