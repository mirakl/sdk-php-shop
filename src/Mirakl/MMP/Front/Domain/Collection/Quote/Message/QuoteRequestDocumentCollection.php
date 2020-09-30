<?php
namespace Mirakl\MMP\Front\Domain\Collection\Quote\Message;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Quote\Message\QuoteRequestDocument;

/**
 * @method  QuoteRequestDocument    current()
 * @method  QuoteRequestDocument    first()
 * @method  QuoteRequestDocument    get($offset)
 * @method  QuoteRequestDocument    offsetGet($offset)
 * @method  QuoteRequestDocument    last()
 */
class QuoteRequestDocumentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = QuoteRequestDocument::class;
}