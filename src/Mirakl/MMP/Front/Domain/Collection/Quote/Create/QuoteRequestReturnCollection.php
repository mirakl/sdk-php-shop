<?php
namespace Mirakl\MMP\Front\Domain\Collection\Quote\Create;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Quote\Create\QuoteRequestReturn;

/**
 * @method  QuoteRequestReturn  current()
 * @method  QuoteRequestReturn  first()
 * @method  QuoteRequestReturn  get($offset)
 * @method  QuoteRequestReturn  offsetGet($offset)
 * @method  QuoteRequestReturn  last()
 */
class QuoteRequestReturnCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = QuoteRequestReturn::class;
}