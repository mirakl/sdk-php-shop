<?php
namespace Mirakl\MMP\Front\Domain\Collection\Quote\Message;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Quote\Message\QuoteRequestMessage;

/**
 * @method  QuoteRequestMessage current()
 * @method  QuoteRequestMessage first()
 * @method  QuoteRequestMessage get($offset)
 * @method  QuoteRequestMessage offsetGet($offset)
 * @method  QuoteRequestMessage last()
 */
class QuoteRequestMessageCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = QuoteRequestMessage::class;
}