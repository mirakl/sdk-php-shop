<?php
namespace Mirakl\MMP\Front\Domain\Collection\Quote\Create;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Quote\Create\CreateQuoteRequest;

/**
 * @method  CreateQuoteRequest  current()
 * @method  CreateQuoteRequest  first()
 * @method  CreateQuoteRequest  get($offset)
 * @method  CreateQuoteRequest  offsetGet($offset)
 * @method  CreateQuoteRequest  last()
 */
class CreateQuoteRequestCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = CreateQuoteRequest::class;
}