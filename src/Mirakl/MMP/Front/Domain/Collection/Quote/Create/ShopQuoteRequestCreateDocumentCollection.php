<?php
namespace Mirakl\MMP\Front\Domain\Collection\Quote\Create;

use Mirakl\Core\Domain\Collection\MiraklCollection;
use Mirakl\MMP\Front\Domain\Quote\Create\ShopQuoteRequestCreateDocument;

/**
 * @method  ShopQuoteRequestCreateDocument  current()
 * @method  ShopQuoteRequestCreateDocument  first()
 * @method  ShopQuoteRequestCreateDocument  get($offset)
 * @method  ShopQuoteRequestCreateDocument  offsetGet($offset)
 * @method  ShopQuoteRequestCreateDocument  last()
 */
class ShopQuoteRequestCreateDocumentCollection extends MiraklCollection
{
    /**
     * @var string
     */
    protected $itemClass = ShopQuoteRequestCreateDocument::class;
}