<?php
namespace Mirakl\MMP\Front\Domain\Collection\Quote\Get;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Quote\Get\QuoteOrderInformation;

/**
 * @method  QuoteOrderInformation   current()
 * @method  QuoteOrderInformation   first()
 * @method  QuoteOrderInformation   get($offset)
 * @method  QuoteOrderInformation   offsetGet($offset)
 * @method  QuoteOrderInformation   last()
 */
class QuoteOrderInformationCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = QuoteOrderInformation::class;
}